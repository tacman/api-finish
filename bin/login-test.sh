curl -X 'POST' \
  'https://127.0.0.1:8007/api/users' \
  -H 'accept: application/ld+json' \
  -H 'Content-Type: application/ld+json' \
  -d '{
  "email": "foo@survos.com",
  "password": "$2y$13$gsFhTKgX1/aPv7hrXMtsj.KBFT87TNjOdSRyR0ZtvKQVNEQVtUW1G",
  "username": "foo"
}'
