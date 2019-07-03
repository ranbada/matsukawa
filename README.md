# 松川接骨院 とりまえずあげます

## install modules
```
$ yarn
```
ダメなら多分npm方が確実
```
$ npm install
```

## start dev server
```
$ yarn dev
```
もしくわ
```
$ gulp
```

## build
```
$ yarn build
```
もしくわ
```
$ gulp build
```

## prod

`public/assets`フォルダの中身を`wordpress/assets`にコピーし、圧縮する。

```
$ yarn rund prod
```

## gitの設定について
hooksは一応置いていますが設定してません。
複数で管理するようになったら設定していきますです。

# Dockerの操作

## Dockerの起動

```
$ docker-compose up -d
```

## Dockerの停止

```
$ docker-compose down
```

# Wordpress

## WordpressのURL

http://localhost:8000/

## Wordpressの管理画面URL

http://localhost:8000/wp-admin/

## phpMyAdminログイン

http://localhost:8080/

```
user: wordpress
password: wordpress
```
