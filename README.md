# Laravel Admin Generator

##˵��

�ⲻ��һ����������Ŀ�����������ø���ʱ��һ��һ���ۻ�������һ�����������Ժܶණ��û��ô���ã��ܶ�������߰��㣬��һ����һ��д������������������ģ����Ա��������簡��

�������Ӻ�æ��10����ǰ��������ˡ��պ��Լ��ĸ��ðɡ�

PS: �ܶ๦�����ӻ�û���ԣ����Ǵ�ž�����������Ҳ��������ȥ���Ӳ���̫��


##��װ

��'composer.json'�м����
```
{
    "require": {
        "juhedao/laravel-admin-generator": "dev-master"
    }
}
```
ִ��'composer install'


����ֱ������'composer require juhedao/laravel-admin-generator=dev-master'


##����

��'/config/app.php'��'providers'���������
```
Juhedao\LaravelAdminGenerator\AdminGeneratorServiceProvider::class,
```

���ŷ���������Դ
```
php artisan vendor:publish
```

Ϊ����Ŀ���ú����ݿ����ӾͿ���ʹ���ˡ�

####ע�⣺����Ŀ��ʽ������ǵ�ɾ��vendor�µ��Լ�'/public/assets'�µ�'juhedao'�ļ���Ŷ��


##ʹ��

��'http://yousite/admin/generator'�ͼ�������ҳ����

����Ա�˺���'admin'��������'admin888'.����sqlite�Ĺ�������Ҳ��'admin888'


###����ģ��

layouts views controllers forms��֧�ִ�ģ������,��form���֧�ֶ�ģ��ѡ��formĬ��default,ģ��洢��'vendor/juhedao/laravel-admin-generator'�¡�֧�����ļ��У�����ʹ�� ���+��+���� ��ʽ����������

�ڴ�ģ�����ɵ�һ�ļ�ʱ��֧��ռλ�滻���������ɲ�֧�֡�


###�������ݿ�

��ʹ��'����Models','����migrations','����seeds','���ɱ�'��Щ����ǰ�������ú�����Ŀ�����ݿ����ӣ�����ֻ������MYsql�����������Լ��ˡ�

������'����mirations'�л���������ģ�����ݿ����ӣ����������ݿ�����ݱ���������Ҫ��migration��