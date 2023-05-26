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


### Unity × Plateu の使い方
1. Unity Hubをインストールします。
　　https://unity.com/ja/download
2. UnityプロジェクトのZipファイルがある場合、それを読み込んでしまうのが楽かもしれません。
* Zipファイルがない場合は3に移ります。面倒なのでzipファイルを使う方を推奨します。
* discordにて共有したGoogle Driveから、UrbanPaletteのzipファイルを落として、Urban-Palette/App の中で解答することを推奨します。
* Zipファイルを解凍すると「UrbanPalette」というディレクトリが出てきます。このディレクトリの中身が丸々Unityプロジェクトになっているので、Unity Hubから右上の Open ボタンの右にあるプルダウンメニューから「add project from disk」というのを選択すると画面中央のプロジェクト一覧にプロジェクトが追加されると思うので、それをダブルクリックするか選択してOpenを押下すると開ける気がします。
* はじめてプロジェクトを開く際には「対応するバージョンのUnityをインストールします」的な指示が出るので、指示に従ってインストールしてください。おそらく2021.3.25f1が入ります。

3. Unity Hubから、2021.3.25f1 を入れます。
4. 入れたら、Unity Hubから「New Project」を選択し、テンプレートとして 3D(core) を選択します。
5. 立ち上がるのを待っている間に、以下のサイトからPlateuのtgzファイルを入手します。
* 以下のサイトに入手方法が書いてあります。
* https://project-plateau.github.io/PLATEAU-SDK-for-Unity/manual/Installation.html
* githubからやる方法は大変煩雑なのでお勧めしません。

6. 立ち上がったら、以下のサイトに従って Plateu SDK for Unityプラグインを入れ、都市のモデルをインポートします。大容量なので時間がかかるので気長に待ちます。
https://note.com/oshimu/n/n2907ead541d6

7. 都市モデルの表示ができたら、githubからUnity関連の修正を行なったブランチのコードをpullします。Assets/scriptsにほとんどのコードが入っているので、それがDLできていればOKです。
8. 動作確認をしていないので動くかわからないのですが、おそらくscriptsをゲームオブジェクトにアタッチする必要があると思います。
* 適当にゲームオブジェクトを作り(面倒なのでただの球体、sphereでいいです)、以下のサイトの「スクリプトをGameObjectにアタッチする」ところだけやってください。Scriptはすでに完成していると思うので、いじるのであれば自己研鑽の範囲でお願いします。
* https://sasanon.hatenablog.jp/entry/2017/09/17/041612
9. Unity Projectの重力の設定を変更し、重力を0にします。
* 参考サイト： https://qiita.com/t_Kaku_7/items/fdf5bab18b65f6f9dcb4
10. この状態で、画面中央上部の ▶︎ ボタンを押してシーンを再生すれば動かせると思います。zipファイルの方は多分動くと思いますが、自分で組み上げる方はテストしてないので何かあればT08Y02の方に相談ください。
