KD Clothing - Admin Panel

1) Import database/admin_setup.sql in phpMyAdmin (inside your kd_clothing database).
2) Open: http://localhost/kd_clothing/admin/login.php

Default Admin Login:
Email: admin@kdclothing.com
Password: Admin@123

Admin Features:
- Products CRUD (Add/Edit/Delete, image upload)
- Dashboard stats
- Orders page (ready for future checkout integration)

Notes:
- Image uploads go to assets/images (ensure folder is writable).
- If you want to change the admin password, you can update the admin user in phpMyAdmin
  (password_hash column must be a bcrypt hash from PHP password_hash()).
