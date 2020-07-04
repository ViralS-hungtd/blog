@extends('front.app')

@section('content')
    <div class="container cyber-container slide-top my-5">
      <div class="cyber-quiz row">
        <div class="col-12">
          <h3 class="cyber-title d-none d-md-block cyber-about__title behind-cyan text-center">
            <span>Bạn hiểu con bạn tới đâu?</span>
          </h3>
          <h3 class="cyber-title d-block d-md-none cyber-about__title behind-cyan text-center">
            <span>Bạn hiểu con bạn</span>
            <br/>
            <span> tới đâu?</span>
          </h3>
        </div>
        <div class="col-12 text-center">
          <img src="{{ asset('assets/images/family.png') }}" alt="" class="img-fluid mb-4">
          <p>Hãy cùng CyberKid làm bài trắc nghiệm dưới đây để tìm hiểu xem<br/>
            bạn đã thực sự hiểu con trên không gian mạng chưa nhé!
          </p>
          <a href="quiz.blade.php" class="btn btn-info">LÀM TRẮC NGHIỆM</a>
        </div>
      </div>
    </div>
@endsection
