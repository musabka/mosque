# نظام الاستشارات النفسية أونلاين

تطبيق بسيط بلغة PHP مع قاعدة بيانات MySQL يوفر الصفحات التالية:

- لوحة تحكم المدير
- لوحة تحكم الطبيب
- لوحة تحكم المريض
- صفحة حجز موعد تخزن البيانات في قاعدة البيانات

## الإعداد

1. إنشاء قاعدة البيانات والجداول:
   ```sql
   CREATE DATABASE counseling;
   USE counseling;
   CREATE TABLE appointments (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100),
       appointment_date DATE
   );
   ```
2. تعديل بيانات الاتصال في ملف `config.php` بما يناسب إعداد قاعدة البيانات لديك.

## التشغيل

شغل خادم PHP المدمج من داخل هذا المجلد:
```bash
php -S localhost:8000
```
بعدها افتح المتصفح على `http://localhost:8000/index.php` للتنقل بين الصفحات.

## رفع المشروع إلى GitHub

لرفع الملفات إلى مستودع على GitHub يمكنك اتباع الخطوات الآتية بعد إنشاء المستودع هناك:

```bash
git remote add origin <رابط-المستودع>
git push -u origin main
```

سيتم بذلك رفع الملفات الحالية إلى المستودع البعيد.
