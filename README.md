youbbs-openshift
================

youBBS deployed on Openshift

youBBS Official Website [youbbs.sinaapp.com](http://youbbs.sinaapp.com/ "YouBBS")

How to creat youBBS on openShift
------------------

Do following commands in your Git bash

```
rhc app create <youBBSname> php-5 mysql-5
cd <youBBSname>
git remote add upstream -m master git://github.com/ego008/youbbs-openshift.git
git pull -s recursive -X theirs upstream master
git push
```

Or install online, [Read more...](http://youbbs.sinaapp.com/t/1340 "YouBBS")
