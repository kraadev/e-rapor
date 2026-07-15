<div align="center">

# 📚 E-Rapor

### Modern Web-Based Student Report Management System

<p align="center">

Sistem E-Rapor berbasis web yang dikembangkan menggunakan **Laravel** sebagai Backend dan **Nuxt.js** sebagai Frontend dengan database **MySQL**. Project ini bertujuan untuk membantu pengelolaan data akademik, nilai, serta rekapitulasi kehadiran siswa secara lebih efisien.

</p>

<p>

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Nuxt](https://img.shields.io/badge/Nuxt-4-00DC82?style=for-the-badge&logo=nuxtdotjs&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Status](https://img.shields.io/badge/Status-In_Development-yellow?style=for-the-badge)
![License](https://img.shields.io/github/license/kraadev/e-rapor?style=for-the-badge)
![Repo Size](https://img.shields.io/github/repo-size/kraadev/e-rapor?style=for-the-badge)
![Last Commit](https://img.shields.io/github/last-commit/kraadev/e-rapor?style=for-the-badge)

</p>

</div>

---

# 📖 About

**E-Rapor** merupakan sistem informasi akademik berbasis web yang dirancang untuk membantu sekolah dalam mengelola data siswa, guru, kelas, nilai akademik, dan kehadiran secara terintegrasi.

Project ini menggunakan arsitektur **Backend API** dengan **Laravel 12** serta **Nuxt.js** sebagai frontend sehingga proses pengembangan lebih modular dan mudah dikembangkan.

> 🚧 **Status:** Project masih dalam tahap pengembangan sehingga beberapa fitur belum tersedia.

---

# ✨ Planned Features

## 👨‍💼 Administrator

- Authentication
- Dashboard
- User Management
- Role Management
- Teacher Management
- Student Management
- Class Management
- Subject Management
- Academic Year Management

---

## 👨‍🏫 Teacher

- Login
- Manage Student Grades
- Attendance Recap
- View Teaching Schedule

---

## 👩‍🎓 Student

- Login
- View Report Card
- View Attendance
- View Academic Information

---

# 🛠 Tech Stack

| Category | Technology |
|-----------|------------|
| Backend | Laravel 12 |
| Frontend | Nuxt.js 4 |
| Database | MySQL |
| API | Laravel REST API |
| Authentication | Laravel Sanctum |
| Styling | Tailwind CSS |
| Development Environment | Laragon |

---

# 🏗 System Architecture

```text
Client Browser
      │
      ▼
 Nuxt.js Frontend
      │
 REST API
      │
      ▼
 Laravel Backend
      │
      ▼
 MySQL Database
```

---

# 📂 Project Structure

```text
e-rapor/
│
├── backend/
│   ├── app/
│   ├── database/
│   ├── routes/
│   ├── storage/
│   ├── public/
│   └── ...
│
├── frontend/
│   ├── assets/
│   ├── components/
│   ├── pages/
│   ├── layouts/
│   ├── plugins/
│   ├── middleware/
│   └── ...
│
├── README.md
├── LICENSE
└── .gitignore
```

---

# ⚙ Requirements

- PHP 8.2+
- Composer
- Node.js 20+
- npm
- Laragon
- MySQL

---

# 🚀 Installation

## Clone Repository

```bash
git clone https://github.com/kraadev/e-rapor.git
```

---

## Backend Setup

Masuk ke folder backend

```bash
cd backend
```

Install dependency

```bash
composer install
```

Copy environment

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Atur konfigurasi database pada file `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=e_rapor
DB_USERNAME=root
DB_PASSWORD=
```

Jalankan migration

```bash
php artisan migrate --seed
```

Jalankan backend

```bash
php artisan serve
```

Backend berjalan di

```
http://127.0.0.1:8000
```

---

## Frontend Setup

Masuk ke folder frontend

```bash
cd frontend
```

Install dependency

```bash
npm install
```

Jalankan development server

```bash
npm run dev
```

Frontend berjalan di

```
http://localhost:3000
```

---

# 📡 API Flow

```text
Nuxt Frontend
      │
      ▼
Laravel Sanctum
      │
      ▼
REST API
      │
      ▼
MySQL
```

---

# 🖥 Current Development

- Authentication
- Backend API
- Database Migration
- Nuxt Frontend
- Dashboard Development

---

# 🛣 Roadmap

## Phase 1

- [x] Laravel Installation
- [x] Nuxt Installation
- [x] MySQL Configuration
- [x] Sanctum Authentication
- [ ] Login Page
- [ ] Dashboard

---

## Phase 2

- [ ] Student Management
- [ ] Teacher Management
- [ ] Subject Management
- [ ] Class Management

---

## Phase 3

- [ ] Attendance Module
- [ ] Grade Management
- [ ] Report Card Generation
- [ ] Print PDF

---

## Phase 4

- [ ] Notifications
- [ ] Settings
- [ ] Dark Mode
- [ ] Deployment

---

# 🚀 Future Improvements

- Export PDF
- Export Excel
- Role Based Permission
- Responsive Dashboard
- Analytics Dashboard
- Multi Academic Year
- Parent Portal
- Notification System

---

# 🤝 Contributing

1. Fork repository

2. Create feature branch

```bash
git checkout -b feature/new-feature
```

3. Commit changes

```bash
git commit -m "Add new feature"
```

4. Push

```bash
git push origin feature/new-feature
```

5. Create Pull Request

---

# 📜 License

This project is licensed under the **MIT License**.

See the **LICENSE** file for more information.

---

# 👨‍💻 Developer

**Kraadev**

GitHub

https://github.com/kraadev

---

<div align="center">

## 🚧 Project Status

**This project is currently under active development.**

⭐ Don't forget to leave a star if you like this project.

Made with ❤️ by **Kraadev**

</div>
