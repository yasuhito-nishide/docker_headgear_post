@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-center h-100">
    <form method="get" action="{{ route('memo.index') }}">
        <div class="card rounded login-card-width shadow">
            <div class="card-body">
                <div class="rounded-circle mx-auto  d-flex mt-3 icon-circle">
                    <img src="{{ asset('images/1604.m00.i105.n002.S.c12.227734471 Web application development process.jpg')  }}" class="w-100 mx-auto p-2" alt="icon"/>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="mt-3 h3">{{ config('app.name') }}</div>
                    <div class="mt-2 h1">{{ config('app.subName')}}</div>
                </div>
                <div class="row mt-3">
                    <div class="offset-2 col-8 offset-2">
                        <label class="input-group w-100">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                </span>
                            <input type="text" name="user_email" class="form-control" placeholder="メールアドレス" autocomplete="off" />
                        </label>
                        <label class="input-group w-100">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </span>
                            <input type="password" name="user_password" class="form-control" placeholder="パスワード" autocomplete="off" />
                        </label>
                        <button type="submit" class="form-control btn btn-success">
                            ログイン
                        </button>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="d-flex justify-content-center">
                        アカウントをお持ちではありませんか？
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route("user.register") }}" class="text-success">アカウントを作成</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection