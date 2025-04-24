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

---
