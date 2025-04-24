# MoneyPal Laravel Gateway

[![Latest Version](https://img.shields.io/github/v/tag/CodePhoenixDev/moneypal-laravel-gateway?label=version)](https://github.com/CodePhoenixDev/moneypal-laravel-gateway/releases)
[![License](https://img.shields.io/github/license/CodePhoenixDev/moneypal-laravel-gateway)](LICENSE)
[![Build Status](https://img.shields.io/badge/build-passing-brightgreen)](https://github.com/CodePhoenixDev/moneypal-laravel-gateway)

**MoneyPal Laravel Gateway** provides seamless integration between your Laravel application and the MoneyPal payment system.  
Built with ❤️ by [Phoenix AI Team](https://github.com/orgs/PhoenixAITeam).

---

## 🚀 Features

- Easy integration with Laravel 8–12
- Simple configuration
- Clean and extendable architecture
- Built with developer experience in mind

---

## 📦 Installation

You can install the package via Composer:

```bash
composer require codephoenixdev/moneypal-laravel-gateway
```

---

## ⚙️ Configuration

After installing, publish the config file using:

```bash
php artisan vendor:publish --tag="moneypal-config"
```

Set your API keys and options in the published config file (`config/moneypal.php`).

---

## ✅ Usage

```php
use CodePhoenixDev\MoneyPal\Facades\MoneyPal;

$response = MoneyPal::pay([
    'amount' => 10000,
    'callback_url' => route('payment.callback'),
    'description' => 'Order #1234',
]);

return redirect()->away($response->getRedirectUrl());
```

---

## 🧪 Testing

```bash
php artisan test
```

---

## 🤝 Contributing

Got an idea or found a bug? Feel free to fork, fix and PR. We welcome contributions!

---

## 📜 License

MIT © [Phoenix AI Team](https://github.com/orgs/PhoenixAITeam)  
Crafted with dedication for the Laravel community.  
```

The MIT License (MIT)

Copyright (c) 2025 CodePhoenixDev

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
