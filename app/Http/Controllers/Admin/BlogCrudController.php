<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Services\File;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ArticleRequest;

class BlogCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkCloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;

    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Blog');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/article');
        $this->crud->setEntityNameStrings('Bài viết/Blog', 'Bài viết/Blog');

        /*
        |--------------------------------------------------------------------------
        | LIST OPERATION
        |--------------------------------------------------------------------------
        */
        $this->crud->operation('list', function () {
            $this->crud->addColumn([
                'name' => 'title',
                'label' => 'Tiêu đề'
            ]);
            $this->crud->addColumn([
                'name' => 'author',
                'label' => 'Bút danh, nguồn trích dẫn',
            ]);
            $this->crud->addColumn([
                'name' => 'date',
                'label' => 'Ngày tạo',
                'type' => 'date',
            ]);
            $this->crud->addColumn([
                'name' => 'status',
                'label' => 'Status',
                'type'        => 'radio',
                'options'     => [
                    // the key will be stored in the db, the value will be shown as label;
                    0 => "Bản nháp",
                    1 => "Hoàn thành"
                ],
            ]);
            $this->crud->addColumn([
                'label' => 'Danh mục',
                'type' => 'select',
                'name' => 'category_id',
                'entity' => 'category',
                'attribute' => 'name',
                'wrapper'   => [
                    'href' => function ($crud, $column, $entry, $related_key) {
                        return backpack_url('category/'.$related_key.'/show');
                    },
                ],
            ]);

            $this->crud->addFilter([ // select2 filter
                'name' => 'category_id',
                'type' => 'select2',
                'label'=> 'Danh mục',
            ], function () {
                return \App\Models\Category::all()->keyBy('id')->pluck('name', 'id')->toArray();
            }, function ($value) { // if the filter is active
                $this->crud->addClause('where', 'category_id', $value);
            });
        });

        /*
        |--------------------------------------------------------------------------
        | CREATE & UPDATE OPERATIONS
        |--------------------------------------------------------------------------
        */
        $this->crud->operation(['create', 'update'], function () {
            $this->crud->setValidation(ArticleRequest::class);

            $this->crud->addField([
                'name' => 'title',
                'label' => 'Tiêu đề',
                'type' => 'text',
                'placeholder' => 'Your title here',
            ]);
            $this->crud->addField([
                'name' => 'slug',
                'label' => 'Link (URL)',
                'type' => 'text',
                'hint' => 'Sẽ được tự tạo khi để trống.',
                // 'disabled' => 'disabled'
            ]);
            $this->crud->addField([
                'name' => 'author',
                'label' => 'Bút danh, nguồn trích dẫn',
                'type' => 'text',
                'placeholder' => 'Bút danh, nguồn trích dẫn',
            ]);
            $this->crud->addField([
                'name' => 'date',
                'label' => 'Ngày tạo',
                'type' => 'date',
                'default' => date('Y-m-d'),
            ]);
            $this->crud->addField([
                'name' => 'short_description',
                'label' => 'Mô tả ngắn',
                'type' => 'textarea'
            ]);
            $this->crud->addField([
                'name' => 'content',
                'label' => 'Nội dung',
                'type' => 'ckeditor',
                'placeholder' => 'Hoàn thành nội dung bài viết',
                'extra_plugins' => [
                    'embed',
                    'widget',
                    'about',
//                    'adobeair',
//                    'autogrow',
//                    'autolink',
                    'balloonpanel',
                    'balloontoolbar',
//                    'bbcode',
//                    'bidi',
                    'clipboard',
                    'emoji',
                    'find',
//                    'flash',
//                    'iframe',
                      'justify',
                      'link',
                    'table',
                    'tableresize',
                    'uicolor',
                      'uploadfile'
                ],
            ]);
            $this->crud->addField([
                'name' => 'image',
                'label' => 'Ảnh bài viết',
                'type' => 'upload',
                'upload' => true
            ]);
            $this->crud->addField([
                'label' => 'Danh mục',
                'type' => 'relationship',
                'name' => 'category_id',
                'entity' => 'category',
                'attribute' => 'name'
            ]);

            $this->crud->addField([
                'name' => 'status',
                'label' => 'Trạng thái',
                'type'        => 'radio',
                'options'     => [
                    // the key will be stored in the db, the value will be shown as label;
                    0 => "Bản nháp",
                    1 => "Hoàn thành"
                ],
                'default' => 1
            ]);
        });
    }

    /**
     * Respond to AJAX calls from the select2 with entries from the Category model.
     * @return JSON
     */
    public function fetchCategory()
    {
        return $this->fetch(\App\Models\Category::class);
    }

    public function store()
    {
        $this->crud->hasAccessOrFail('create');

        // execute the FormRequest authorization and validation, if one is required
        $request = $this->crud->validateRequest();

        // insert item in the db
        $input = $request->all();

        if($request->image) {
            $input['image'] = File::saveFile('public/images', $request->image);
        }

        $category = Category::find($request->category_id);
        $input['type'] = $category->type;
        $item = $this->crud->create($input);
        $this->data['entry'] = $this->crud->entry = $item;

        // show a success message
        \Alert::success(trans('backpack::crud.insert_success'))->flash();

        // save the redirect choice for next time
        $this->crud->setSaveAction();

        return $this->crud->performSaveAction($item->getKey());
    }

    public function update()
    {
        $this->crud->hasAccessOrFail('update');

        // execute the FormRequest authorization and validation, if one is required
        $request = $this->crud->validateRequest();
        $input = $request->all();

        if($request->image) {
            $input['image'] = File::saveFile('public/images', $request->image);
        }

        $category = Category::find($request->category_id);
        $input['type'] = $category->type;

        // update the row in the db
        $item = $this->crud->update($request->get($this->crud->model->getKeyName()),
            $input);
        $this->data['entry'] = $this->crud->entry = $item;

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // save the redirect choice for next time
        $this->crud->setSaveAction();

        return $this->crud->performSaveAction($item->getKey());
    }
}
