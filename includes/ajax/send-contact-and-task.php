<?
add_action('wp_ajax_send_contact_and_task', 'writingor__send_contact_and_task');
add_action('wp_ajax_nopriv_send_contact_and_task', 'writingor__send_contact_and_task');

function writingor__send_contact_and_task() {

    /**
     * $nonce
     * must be true
     */

    if (
        !isset($_POST['nonce']) 
        ||
        !wp_verify_nonce($_POST['nonce'], 'writingor_send_contact_and_task')
        ) {
        // echo json_encode([
        //     'nonce' => 'nonce is invalid',
        // ]);

        exit;

    }

    /**
     * $name
     * must be true
     */

    if (isset($_POST['name'])) {

        if ($_POST['name'] === '') {
            // ok
        } else {
            // echo json_encode([
            //     'name' => 'name must be defined as empty string',
            // ]);

            exit;
        }

    } else {
        // echo json_encode([
        //     'name' => 'name must be defined',
        // ]);

        exit;
    }

    /**
     * $form_name
     * must be true
     */

    if (isset($_POST['form_name'])) {

        if ($_POST['form_name'] === '') {
            // ok
        } else {
            // echo json_encode([
            //     'form_name' => 'form_name must be defined as empty string',
            // ]);

            exit;
        }

    } else {
        // echo json_encode([
        //     'form_name' => 'form_name must be defined',
        // ]);

        exit;
    }

    /**
     * $check_id
     */

    $check_id = null;

    if (isset($_POST['check_id'])) {
        $check_id = sanitize_text_field($_POST['check_id']);
    }

    /**
     * $contact
     */

    $contact = null;

    if (isset($_POST['contact'])) {
        $contact = sanitize_text_field($_POST['contact']);

        if ($contact === '') {
            echo json_encode([
                'message' => 'Укажите контакт',
                'success' => false
            ]);

            exit;
        }
    }

    /**
     * $task
     */

    $task = null;

    if (isset($_POST['task'])) {
        $task = sanitize_text_field($_POST['task']);

        if ($task === '') {
            echo json_encode([
                'message' => 'Опишите задачу',
                'success' => false
            ]);

            exit;
        }
    }

    echo json_encode([
        'message' => 'Спасибо, сообщение успешно отправлено!',
        'success' => true
    ]);

    $ip = $_SERVER['REMOTE_ADDR'];

    $to = get_option('admin_email');
    $subject = 'Заявка с сайта - ' . get_bloginfo('name');
    $body = "
        <p><b>Контакт:</b> $contact</p>
        <p><b>Задача:</b> $task</p>
        <p><b>Форма:</b> $check_id</p>
        <p><b>IP:</b> $ip</p>
    ";
    $headers = ['Content-Type: text/html; charset=UTF-8'];

    wp_mail($to, $subject, $body, $headers);

    exit;
}
