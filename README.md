<div align="center">

# 📚 E-Rapor

### Modern Student Report Management System

<p align="center">

Sistem E-Rapor berbasis web yang dikembangkan menggunakan **Laravel 12** sebagai Backend dan **Nuxt.js 4** sebagai Frontend dengan database **MySQL**.

Project ini masih dalam tahap pengembangan (Development Stage).

</p>

<p>

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Nuxt](https://img.shields.io/badge/Nuxt-4-00DC82?style=for-the-badge&logo=nuxtdotjs&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

</p>

<p>

![Status](https://img.shields.io/badge/Status-In%20Development-yellow?style=for-the-badge)
![License](https://img.shields.io/github/license/kraadev/e-rapor?style=for-the-badge)
![Repo Size](https://img.shields.io/github/repo-size/kraadev/e-rapor?style=for-the-badge)
![Last Commit](https://img.shields.io/github/last-commit/kraadev/e-rapor?style=for-the-badge)
![Stars](https://img.shields.io/github/stars/kraadev/e-rapor?style=for-the-badge)

</p>

</div>

---

# 📖 About

**E-Rapor** merupakan sistem informasi akademik berbasis web yang dirancang untuk membantu sekolah dalam mengelola data akademik secara digital.

Project ini menggunakan arsitektur **REST API**, di mana **Laravel** berperan sebagai Backend API dan **Nuxt.js** sebagai Frontend sehingga pengembangan menjadi lebih modular, scalable, dan mudah dipelihara.

Saat ini project masih berada pada tahap pengembangan sehingga belum tersedia versi production maupun demo online.

---

# 🖼 Preview

## Login

<p align="center">
<img src="docs/login.png" width="100%">
</p>

---

## Dashboard

<p align="center">
<img src="docs/dashboard.png" width="100%">
</p>

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
- Grade Management
- Attendance Management
- View Teaching Schedule
- Student Report Input

---

## 👨‍🎓 Student

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
| Styling | Tailwind CSS |
| Authentication | Laravel Sanctum |
| Database | MySQL |
| Development Environment | Laragon |
| API | REST API |

---

# 🏗 System Architecture

<p align="center">
<img src="docs/architecture.png" width="90%">
</p>

```text
Browser
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

# 📂 Repository Structure

```text
e-rapor/
│
├── backend/
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── database/
│   ├── public/
│   ├── routes/
│   ├── storage/
│   └── ...
│
├── frontend/
│   ├── assets/
│   ├── components/
│   ├── layouts/
│   ├── middleware/
│   ├── pages/
│   ├── plugins/
│   ├── public/
│   └── ...
│
├── docs/
│   ├── login.png
│   ├── dashboard.png
│   ├── architecture.png
│   └── erd.png
│
├── LICENSE
├── README.md
└── .gitignore
```

---

# ⚙ Requirements

- PHP 8.2+
- Composer
- Node.js 20+
- npm
- MySQL
- Laragon

---

# 🚀 Installation

## Clone Repository

```bash
git clone https://github.com/kraadev/e-rapor.git
```

---

## Backend Setup

```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
```

Configure `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=e_rapor
DB_USERNAME=root
DB_PASSWORD=
```

Run migration

```bash
php artisan migrate --seed
```

Run backend

```bash
php artisan serve
```

Backend

```
http://127.0.0.1:8000
```

---

## Frontend Setup

```bash
cd frontend
npm install
npm run dev
```

Frontend

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

# 📸 Development Progress

| Module | Status |
|---------|:------:|
| Laravel Setup | ✅ |
| Nuxt Setup | ✅ |
| Tailwind CSS | ✅ |
| Sanctum | ✅ |
| Authentication | 🚧 |
| Dashboard | 🚧 |
| Student Module | ⏳ |
| Teacher Module | ⏳ |
| Report Card | ⏳ |

---

# 🛣 Roadmap

## Phase 1

- [x] Laravel Installation
- [x] Nuxt Installation
- [x] Tailwind CSS
- [x] Sanctum Authentication
- [ ] Login
- [ ] Dashboard

---

## Phase 2

- [ ] Student Management
- [ ] Teacher Management
- [ ] Subject Management
- [ ] Class Management

---

## Phase 3

- [ ] Attendance
- [ ] Grade Management
- [ ] Report Generation
- [ ] PDF Export

---

## Phase 4

- [ ] Notifications
- [ ] Dark Mode
- [ ] Deployment
- [ ] Optimization

---

# 🚀 Future Improvements

- Excel Export
- PDF Export
- Multi Academic Year
- Parent Portal
- Notification System
- Audit Log
- Responsive Dashboard
- PWA Support
- Docker Deployment
- CI/CD GitHub Actions

---

# 📚 Documentation

Semua screenshot dan dokumentasi visual project disimpan pada folder:

```text
docs/
```

Folder ini berisi:

- Login UI
- Dashboard UI
- System Architecture
- ERD Database
- Dokumentasi lainnya

---

# 🤝 Contributing

1. Fork repository

2. Create new branch

```bash
git checkout -b feature/new-feature
```

3. Commit

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

## 🚧 Development Status

This project is currently under active development.

No production deployment is available yet.

⭐ Don't forget to leave a star if you like this project.

Made with ❤️ by **Kraadev**

</div>
