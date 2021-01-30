# ReserveTennisCourt
## 環境構築手順
### mac
- 必要ソフトをインストール
  ```
  brew install selenium-server-standalone
  brew install chromedriver
  ```
- [chromedriverを許可](https://qiita.com/apukasukabian/items/77832dd42e85ab7aa568)
- PHP7.4インストール
  ```
  brew install php@7.4
  brew link php@7.4
  echo 'export PATH="/usr/local/opt/php@7.4/bin:$PATH"' >> ~/.zshrc
  echo 'export PATH="/usr/local/opt/php@7.4/sbin:$PATH"' >> ~/.zshrc
  ```
- [composerインストール](https://getcomposer.org/download/)
  - 公式通りコマンド実行
  - パスを通す
