# Tutorial Git y Github
Descargamos Git de su web oficial [git-scm.com](https://git-scm.com/downloads)
## Primeros pasos. Configuración
### Para saber tu configuración en Git
```
git config --list
```
### Para cambiar nombre de usuario y correo electrónico en la configuracion actual

```
git config user.name "Chencho"
git config user.email "chencho@email.com"
```

### Para cambiar nombre de usuario y correo electrónico global

```
git config --global user.name "Chencho"
git config --global user.email "chencho@email.com"
```

### Saber nombre de usuario y email con el que estás

```
git config user.name
git config user.email
```

### Para cambiar la URL del repositorio

```
nano .git/config
```
Le saldrá algo parecido a esto

```
[core] 
  repositoryformatversion = 0 
  fileMode = false bare = false 
  logallrefupdates = true 
  ignorecase = true 
  precomposeunicode = true 
[remote "origin"] 
  url = https://github.com/chencho
  fetch = +refs/heads/*:refs/remotes/origin/* 
[branch "master"] 
remote = origin merge = refs/heads/master
[user]
        name = Chencho
        email = chencho@email.com
```



## Repositorio Local
