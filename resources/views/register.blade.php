<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .form-group{
    width: 100%;
    height: 1200px;
    background: linear-gradient(#ff34ff, #8646ff);
  }
  .name{
    left
  }
  .email{
    left
  }
  .password{
    left
  }
  .zip{
    left
  }
  .prefecture{
    left
  }
  .address{
    left
  }
  .te{
    left
  }
</style>
<body>
  <h1>会員登録</h1>
  <form action="{{ route('modeller.store')}}">
    @csrf
    <div class="form-group">
        <div class="name">
          <label for="name">お名前:<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
          <input type="text" name="name" id="name">
        </div>
        <div class="email">
          <label for="email">メールアドレス:<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
          <input type="email" name="email" id="email">
        </div>
        <div class="password">
          <label for="password">パスワード:<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
          <input type="password" name="password" id="password">
        </div>
        <div class="zip">
          <label for="zip">郵便番号:<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
          <input type="text" name="zip" id="zip">
        </div>
        <div class="prefecture">
          <label for="prefecture">郵便番号:<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
          <input type="text" name="prefecture" id="prefecture">
        </div>
        <div class="address">
          <label for="address">住所:<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
          <input type="text" name="prefecture" id="prefecture">
        </div>
        <div class="tel">
          <label for="tel">電話番号:<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
          <input type="tel" name="tel" id="tel">
        </div>
        <div>
          <button type="submit" class="btn btn-success">{{ __('登録') }}</button>
        </div>
    </div>
  </form>
</body>
</html>