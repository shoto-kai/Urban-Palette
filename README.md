# Urban-Palette
### 開発の流れ
- [project](https://github.com/orgs/shoto-kai/projects/2/views/1)からissueを作成
- ブランチをきる(ex ```git switch -c api/feature/001```)
- 開発
- commitを出す。 この時コミットメッセージの先頭にissue番号を紐付ける(ex ```git commit -m "#1 Laravelの環境構築"```)
- プルリクを出す(フロントはフロント、バックはバックでそれぞれの相方がマージするのがいいかな？)
- issueとブランチを閉じる

### ブランチの命名規則
- フロントエンド

  app/feature/{issues番号}
- バックエンド

  api/feature/{issues番号}
