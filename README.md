# Amazying Theme

[![Оригинальная верстка](https://amazying.vercel.app/)]

Улучшение моей старой верстки и ее натяжка на WordPress.

---

## Стек технологий (Tech Stack)

- **CMS:** WordPress
- **Стили:** SCSS
- **Сборщик:** Vite

## 📂 Структура проекта

```
└── src/                      # Исходные файлы темы (Source)
    ├── assets/               # Статические ресурсы
    │   ├── images/           # Исходные изображения и иконки
    │   └── scss/             # Стили (архитектура БЭМ, переменные, миксины)
    ├── inc/                  # Кастомный PHP-функционал (хуки, Customizer API)
    ├── js/                   # Скрипты (JS-модули и логика)
    ├── pages/                # Шаблоны конкретных страниц (page-about, page-home)
    └── template-parts/       # Повторяющиеся компоненты (header, footer, content-none)
├── functions.php         # Главный файл конфигурации темы
├── index.php             # Основной файл шаблона
└── style.css             # Стили и метаданные темы для WordPress
```
