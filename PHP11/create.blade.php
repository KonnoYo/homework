{{-- 課題4．
     resources/views/admin/profile/create.blade.phpファイルを作成し
     課題3で作成したprofile.blade.phpファイルを読み込み、
     またプロフィールのページであることがわかるように 
     titleとcontentを編集する                                       --}}


{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィール')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール</h2>
            </div>
        </div>
    </div>
@endsection