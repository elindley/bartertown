
# MVP Features

users should be able to create, update, and delete ads
- no login
- user is emailed secret url hash for their post
- post should expire at some point
- ads should be listed under categories
- sanitize and validate input 


users should be able to search and read ads
- ads are category, title, and post body
- lists of posts are paginated 
- can search contents of body and title

# Feature wishlist

- anonymous email
- extra fields for ads e.g. location or price


table for users
id = int
email = varchar


table for ads
id = int
date = varchar
title = varchar
body = varchar
category = varchar
user = int 

table for categories
id
category
ads 