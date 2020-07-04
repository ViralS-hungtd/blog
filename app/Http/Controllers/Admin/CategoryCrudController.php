<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Http\Requests\CategoryRequest;

class CategoryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\InlineCreateOperation;

    public function setup()
    {
        CRUD::setModel("App\Models\Category");
        CRUD::setRoute(config('backpack.base.route_prefix', 'admin').'/category');
        CRUD::setEntityNameStrings('Danh mục', 'Danh mục');
        $this->crud->denyAccess(['update', 'create', 'delete', 'show']);
    }

    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name' => 'name',
            'label' => 'Tên danh mục'
        ]);
        CRUD::addColumn([
            'name' => 'slug',
            'label' => 'Nhãn'
        ]);

        CRUD::addColumn([
            'name' => 'type',
            'label' => 'Loại danh mục',
            'type' => 'radio',
            'options'     => [
                // the key will be stored in the db, the value will be shown as label;
                0 => "Blog",
                1 => "Tin tức, sự kiện"
            ],
        ]);
        CRUD::addColumn([   // select_multiple: n-n relationship (with pivot table)
            'label'     => 'Bài viết / Blog', // Table column heading
            'type'      => 'relationship_count',
            'name'      => 'blogs', // the method that defines the relationship in your Model
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('article?category_id='.$entry->getKey());
                },
            ],
        ]);
    }

    protected function setupShowOperation()
    {
        $this->setupListOperation();

        CRUD::addColumn('created_at');
        CRUD::addColumn('updated_at');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(CategoryRequest::class);

        CRUD::addField([
            'name' => 'name',
            'label' => 'Tên danh mục',
        ]);
        CRUD::addField([
            'name' => 'slug',
            'label' => 'Link (URL)',
            'type' => 'text',
            'hint' => 'Sẽ tự sinh ra khi để trống',
            // 'disabled' => 'disabled'
        ]);
        CRUD::addField([
            'name' => 'type',
            'label' => 'Loại danh mục',
            'type' => 'radio',
            'options'     => [
                // the key will be stored in the db, the value will be shown as label;
                0 => "Blog",
                1 => "Tin tức, sự kiện"
            ],
        ]);
        CRUD::addField([
            'label' => 'Danh mục cha',
            'type' => 'select',
            'name' => 'parent_id',
            'entity' => 'parent',
            'attribute' => 'name',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupReorderOperation()
    {
        CRUD::set('reorder.label', 'name');
        CRUD::set('reorder.max_level', 2);
    }
}
