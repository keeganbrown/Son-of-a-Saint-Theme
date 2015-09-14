#!/bin/bash
if [[ "$(git status)" == "fatal: Not a git repository (or any of the parent directories): .git" ]]; then
	./
fi
#chown apache:apache ../../../../../private/sonofasaint_id_rsa
#chmod 600 ../../../../../private/sonofasaint_id_rsa
ls -l ../../../../../private
eval $("ssh-agent -s")
ssh-add ../../../../../private/sonofasaint_id_rsa
git fetch origin
git reset --hard origin/master
eval $("ssh-agent -k")
