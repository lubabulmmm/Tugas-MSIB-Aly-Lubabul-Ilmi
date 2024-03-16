<?php
class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if (isset ($_SESSION['flash'])) {
            echo '<div class="bg-' . self::getColor($_SESSION['flash']['tipe']) . '-100 border border-' . self::getColor($_SESSION['flash']['tipe']) . '-400 text-' . self::getColor($_SESSION['flash']['tipe']) . '-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">' . $_SESSION['flash']['pesan'] . '</strong>
                    <span class="block sm:inline">' . $_SESSION['flash']['aksi'] . '</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-' . self::getColor($_SESSION['flash']['tipe']) . '-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path fill-rule="evenodd" d="M14.293 5.293a1 1 0 0 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 1 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 1 1-1.414-1.414L8.586 10 4.293 5.707a1 1 0 0 1 1.414-1.414L10 8.586l4.293-4.293z" clip-rule="evenodd"/>
                        </svg>
                    </span>
                </div>';
            unset($_SESSION['flash']);
        }
    }

    public static function getColor($tipe)
    {
        switch ($tipe) {
            case 'success':
                return 'green';
                break;
            case 'danger':
                return 'red';
                break;
            case 'warning':
                return 'yellow';
                break;
            case 'info':
                return 'blue';
                break;
            default:
                return 'gray';
                break;
        }
    }
}
