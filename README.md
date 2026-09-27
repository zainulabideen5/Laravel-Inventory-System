# Laravel Inventory System

Inventory and point of sale system built with Laravel. It tracks stock from the moment it is purchased from a supplier to the moment it is sold on an invoice, including payments and customer credit.

## Features

**Master data**

- Suppliers, customers, units, categories and products

**Purchasing**

- Record purchases from suppliers
- Approve pending purchases, which then add the stock

**Sales**

- Create invoices with multiple products
- Live stock check while adding products to an invoice
- Pending invoices are approved only when there is enough stock
- Print any invoice
- Record each invoice as paid in full or due

**Customers**

- Credit customers with outstanding balances, and paid customers
- Update a customer's payment on an existing invoice
- Customer-wise sales, credit and paid reports

**Reports**

- Stock report
- Daily purchase and invoice reports
- PDF export for the main reports

**Accounts**

- Login, registration, email verification and password reset
- Admin profile with photo and password change

## Tech stack

- PHP 8, Laravel 9
- Blade templates with an admin dashboard theme
- MySQL
- Intervention Image for profile and customer photos
- jQuery and AJAX for the dynamic forms

## Database

| Table | Holds |
|---|---|
| `suppliers` | Supplier details |
| `customers` | Customer details |
| `units` | Units of measure |
| `categories` | Product categories |
| `products` | Products and current stock |
| `purchases` | Purchases from suppliers |
| `invoices`, `invoice_details` | Sales and their line items |
| `payments`, `payment_details` | Payments against invoices |

## Getting started

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Add your database details to `.env`, then:

```bash
php artisan migrate
php artisan serve
```

Open `http://localhost:8000` and register the first account.

---

Built by [Zain Ul Abideen](https://github.com/zainulabideen5)
