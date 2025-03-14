# adyen-library-sandbox

## Application Structure

```
Adyen Sandbox System
├── frontend/          # フロントエンド（HTML/JS）
│   ├── index.html     # UI & リクエスト送信
│   ├── script.js      # APIとの通信
│
├── main-api/          # メインAPI（Node.js）
│   ├── server.js      # 言語を選んで実行
│   ├── package.json
│   ├── Dockerfile
│
├── php-container/     # PHP API
│   ├── server.php     # Adyen APIを呼ぶ
│   ├── Dockerfile
│
├── docker-compose.yml # 全体のコンテナ管理
└── README.md          # 説明書

```
