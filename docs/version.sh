if [[ `git status --porcelain` ]]; then
  echo 1
else
  echo 0
fi
