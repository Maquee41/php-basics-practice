# Урок 01 — Установка и запуск PHP-скриптов

## Что нужно изучить?

- Установить PHP
- Научиться запускать PHP-скрипты
- Запустить встроенный в PHP веб-сервер

---

## Установка PHP на Debian 12

Последняя доступная версия PHP в Debian 12 на момент написания — **PHP 8.2**. Установим интерпретатор и необходимые модули:

```bash
sudo apt update                 # Обновляем список пакетов
sudo apt install php8.2         # Устанавливаем интерпретатор PHP
php -v                          # Проверяем установленную версию PHP
sudo apt install php8.2-mysql   # Устанавливаем модуль для работы с MySQL
```

---

## Запуск PHP-скриптов в терминале (CLI)

PHP-файлы можно запускать через терминал с помощью команды:

```bash
php index.php
```

Пример вывода:

```
Hello World
```

---

## Запуск через встроенный веб-сервер PHP

PHP предоставляет встроенный веб-сервер, удобный для тестирования скриптов без установки Apache или Nginx:

```bash
php -S localhost:8000
```

По умолчанию будет запущен сервер, обслуживающий текущую директорию. Если в ней есть файл `index.php`, он автоматически откроется при переходе по адресу:

[http://localhost:8000](http://localhost:8000)

Для остановки сервера нажми `Ctrl + C`.

> ⚠️ **Важно:** встроенный сервер не рекомендуется для использования в продакшене — он предназначен только для локальной разработки и обучения.
