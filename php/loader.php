<? 
session_start();
//require_once 'db.php';








            $token = '5618492160.d4af114.5a67f687b3f14e54a25626b9c18a8a39';
            /*
             * Тут указываем либо ID пользователя, либо "self" для вывода фото владельца токена
             * Как получить ID? Да в том же инструменте, в котором вы получали токен
             */
            $user_id = 'self';
            $instagram_cnct = curl_init(); // инициализация cURL подключения
            curl_setopt( $instagram_cnct, CURLOPT_URL, "https://api.instagram.com/v1/users/" . $user_id . "/media/recent?access_token=" . $token ); // подключаемся
            curl_setopt( $instagram_cnct, CURLOPT_RETURNTRANSFER, 1 ); // просим вернуть результат
            curl_setopt( $instagram_cnct, CURLOPT_TIMEOUT, 15 );
            $media = json_decode( curl_exec( $instagram_cnct ) ); // получаем и декодируем данные из JSON
            curl_close( $instagram_cnct ); // закрываем соединение
             
            /*
             * количество фотографий для вывода
             */
            $limit = 1;
            /*
             * размер изображений (высота и ширина одинаковые)
             */
            $size = 400;
            /*
             * функция array_slice() задает количество элементов, которые нам нужно получить из массива
             * если нам нужно вывести все фото, тогда: foreach($media->data as $data) {
             */
                if( $_SESSION['loader'] == 19) exit('end');
            
            
            foreach(array_slice($media->data, $_SESSION['loader'], $limit) as $data) {
                $result ='<img src="'. $data->images->low_resolution->url . '" />';
                echo  $result;
                //echo '</div>';
            }
            $_SESSION['loader'] += 1;

 ?>