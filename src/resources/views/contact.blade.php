@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}" />
                        </div>
                        <div class="form__error">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <label>
                                <input type="radio" name="gender" value="男性" {{ old('gender', '男性') == '男性' ? 'checked' : '' }}>
                                男性
                            </label>
                            <label>
                                <input type="radio" name="gender" value="女性" {{ old('gender') == '女性' ? 'checked' : '' }}>
                                女性
                            </label>
                            <label>
                                <input type="radio" name="gender" value="その他" {{ old('gender') == 'その他' ? 'checked' : '' }}>
                                その他
                            </label>
                        </div>
                        <div class="form__error">
                            @error('gender')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="test@example.com"
                                value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
                        </div>
                        <div class="form__error">
                            @error('tel')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                        </div>
                        <div class="form__error">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}" />
                        </div>
                        <div class="form__error">
                            @error('building')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <select name="category">
                                <option value="" disabled selected>選択してください</option>
                                <option value="商品のお届けについて" {{ old('category') == '商品のお届けについて' ? 'selected' : '' }}>商品のお届けについて</option>
                                <option value="商品の交換について" {{ old('category') == '商品の交換について' ? 'selected' : '' }}>商品の交換について</option>
                                <option value="商品トラブル" {{ old('category') == '商品トラブル' ? 'selected' : '' }}>商品トラブル</option>
                                <option value="ショップへのお問い合わせ" {{ old('category') == 'ショップへのお問い合わせ' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                                <option value="その他" {{ old('category') == 'その他' ? 'selected' : '' }}>その他</option>
                            </select>
                        </div>
                        <div class="form__error">
                            @error('category')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="お問合せ内容をご記載下さい"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>
            </form>
        </div>
    </main>
    </body>

    </html>
@endsection
