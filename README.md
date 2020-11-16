# Laravelの練習
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

