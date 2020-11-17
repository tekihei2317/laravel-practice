# Laravelの練習
## ディレクトリ構成
- app/
  - Http/
    - Controllers/ コントローラー
    - Middleware/
    - Requests/ フォーム内容のバリデーション等
  - Models/ モデル
- resources/
  - css/
  - js/
  - lang/
  - views/ ビュー
- routes/ ルーティング
  
## コマンド一覧
### 
|コマンド名|詳細|
|--|--|
|php artisan tinker|REPLの起動|
|php artisan make:controller ControllerName|コントローラーの作成|
|php artisan make:model ModelName|モデルの作成|
### migration
|コマンド名|詳細|
|--|--|
|php artisan migration|マイグレーションの実行|
|php artisan migration:status|マイグレーションの状態の確認|
|php artisan migration:refresh|マイグレーションを1から再実行|
|php artisan migration:fresh|マイグレーションを1から再実行(テーブルごと削除する)|
|php artisan migration:rollback|マイグレーションを巻き戻す(全部)|
|php artisan migration:rollbacl --step=n|マイグレーションをn個巻き戻す|

### ルーティング
|aaa|bbb|
|--|--|
|Route::get('/', 'App\Http\Controllers\ArticleController@index');|個別に設定|
|Route::resource('/articles', 'App\Http\Controllers\ArticleController')->except(['index']);|まとめて設定(onlyも使える)|

### Eloquent ORM
