<?php

return [
    'log_request_details' => true, // 是否记录请求数据

    'log_input_data' => true, // 是否记录用户输入数据

    'log_request_headers' => false, // 是否记录请求头

    'log_session_data' => true, // 是否记录SESSION数据

    'log_memory_usage' => false, // 是否记录内存使用情况

    'log_git_data' => false, // 是否记录git分支和提交详细信息

    // 排除敏感信息字段名
    'ignore_input_fields' => ['password', 'confirm_password', 'password_confirmation'],
];
