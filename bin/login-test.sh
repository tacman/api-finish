curl -X 'POST' \
  'https://127.0.0.1:8006/api/users' \
  -H 'accept: application/ld+json' \
  -H 'Content-Type: application/ld+json' \
  -d '{
  "email": "tt@survos.com",
  "password": "$2y$13$h6LLcmnViThYnRwt8AxQN.YDswLbX5ZPP6Qd8wR5TsHM9vIbvt4N2",
  "username": "tt"
}'
