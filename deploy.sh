#!/usr/bin/env bash

# Simple deploy using git fetch
# @author   Derek Marcinyshyn
# @date     2016-03-06

# Git fetch
git fetch origin master
git reset --hard FETCH_HEAD

# Reset folder permissions
chown mushy:psaserv -Rf dist

echo "All done."
