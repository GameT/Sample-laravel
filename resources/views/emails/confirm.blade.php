<html>
    <head>
        <meta charset="UTF-8">
        <title>注册确认链接</title>
    </head>
    <body>
        <h1>感谢您在我的网站注册</h1>
        <p>
            点击此链接激活:
            <a href="{{ route('confirm_email',$user->activation_token) }}" >
                {{ route('confirm_email',$user->activation_token) }}
            </a>
        </p>
        <p>若非本人操作，请忽略该邮件！</p>
    </dody>
</html>