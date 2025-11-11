PS D:\github> git init
Initialized empty Git repository in D:/github/.git/
PS D:\github> git status
On branch master

No commits yet

Untracked files:
        index.php
        index.php

nothing added to commit but untracked files present (use "git add" to track)
PS D:\github> git add index.php
PS D:\github> git commit -m 'add chinh chu'
[master (root-commit) 50a11e4] add chinh chu
 1 file changed, 68 insertions(+)
 create mode 100644 index.php
PS D:\github> git log
commit 50a11e4660056498138cd837f207744db4077581 (HEAD -> master)
Date:   Tue Nov 11 15:42:23 2025 +0700

    add chinh chu
PS D:\github> git remote add origin https://github.com/Sonbui04/bnk.git

PS D:\github> git push -u origin main
error: src refspec main does not match any
error: failed to push some refs to 'https://github.com/Sonbui04/bnk.git'
PS D:\github> git push -u origin main 
error: src refspec main does not match any
error: failed to push some refs to 'https://github.com/Sonbui04/bnk.git'
PS D:\github> 