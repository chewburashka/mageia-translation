mageia-translation
==================

перевод текстов для магии

для работы с github

(вообще можно всё делать через этот же сайт, в том числе и fork)

создать директорию git в своей домашней папке
зайти в неё через терминал выполнить команду (лучше не делать этого из под root пользователя, чтобы не нарушались права)

git clone git://github.com/chewburashka/mageia-translation.git

затем 

git checkout

================
- - - - - - - - - -
если при следующем шаге будут возникать ошибки, то следует выполнить команду

git pull --rebase
git config --global push.default current

может быть хватит только 

git config --global push.default current

================
- - - - - - - - - -

затем, можно добавить свои файлы в проект, 

git add -A или git add add_this.file

затем

git commit

внести свой комментарий к коммиту (выход из vim ctrl=C :quit или :qw)
проверить, что в своём профиле на github зарегистрирован ssh_key (https://github.com/settings/ssh)
и тогда отправлять файл

git push git@github.com:chewburashka/mageia-translation.git

можно это же сделать через https
git push https://github.com/chewburashka/mageia-translation.git
но я это ещё не проверил возможно надо вставить свой %USERNAME% вместо или рядом с чёбурашкой


