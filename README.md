# つだぬまいんふぉ

# 構成図
```
root/
　├ htdocs/
　│  ├ account/
　│  ├ css/
　│  ├ dbconnect/
　│  ├ html/
　│  ├ img/
　│  └ template/
　├ mysql/
　│  ├ db/
　│  │  └ init.sql
　│  └ my.cnf
　├ php/
　│  ├ Dockerfile
　│  └ php.ini
　└ docker-compose.yml
```

# 環境構築手順
## 作成

#### Dockerイメージを立てる　=> imageをpullしてきて作成
```
$ docker-compose build
```

#### 立てたコンテナを起動　=> imageからコンテナを立て、起動
```
$ docker-compose up -d
```

#### 起動中のコンテナの詳細を確認
```
$ docker ps -a
```
#### mysqlのコンテナIDをコピーし、下記３ファイルを書き換える。
* /tsudanuma-info/htdocs/dbconnect/pdo_connect.php

## 停止・再開

#### コンテナの停止
```
$ docker-compose stop
```
#### コンテナの再開
```
$ docker-compose start
```

#### 確認
* [サイト画面](http://localhost/html/index.html)
* [DB画面](http://localhost:8080)

## 削除

#### データベースも含めてコンテナを削除
```
$ docker-compose down --volumes
```
#### 立てたコンテナの再起動　=> DockerイメージをビルドしたあとにDockerFileを変更したりした場合は再びビルドする必要がある
```
$ docker-compose up -d --build
```


## gitの管理からコンテナIDの記載されたファイルを回避する
#### 無視
```
git update-index --skip-worktree htdocs\dbconnect\pdo_connect.php
```
#### 監視
```
git update-index --no-skip-worktree htdocs\dbconnect\pdo_connect.php
```