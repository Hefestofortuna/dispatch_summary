<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'yiisoft/yii2-app-advanced',
  ),
  'versions' => 
  array (
    'andrewdanilov/yii2-admin-panel' => 
    array (
      'pretty_version' => '2.0.5',
      'version' => '2.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac8c97d2a1cb51685e6b0944af005ed4084c9a8e',
    ),
    'andrewdanilov/yii2-grid-tools' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '65caecc159f3e4dce98147f447c3ecbdd3fe5032',
    ),
    'behat/gherkin' => 
    array (
      'pretty_version' => 'v4.8.0',
      'version' => '4.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2391482cd003dfdc36b679b27e9f5326bd656acd',
    ),
    'bower-asset/bootstrap' => 
    array (
      'pretty_version' => 'v3.4.1',
      'version' => '3.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '68b0d231a13201eb14acd3dc84e51543d16e5f7e',
    ),
    'bower-asset/inputmask' => 
    array (
      'pretty_version' => '3.3.11',
      'version' => '3.3.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e670ad62f50c738388d4dcec78d2888505ad77b',
    ),
    'bower-asset/jquery' => 
    array (
      'pretty_version' => '3.5.1',
      'version' => '3.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4c0e4becb8263bb5b3e6dadc448d8e7305ef8215',
    ),
    'bower-asset/punycode' => 
    array (
      'pretty_version' => 'v1.3.2',
      'version' => '1.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '38c8d3131a82567bfef18da09f7f4db68c84f8a3',
    ),
    'bower-asset/yii2-pjax' => 
    array (
      'pretty_version' => '2.0.7.1',
      'version' => '2.0.7.1',
      'aliases' => 
      array (
      ),
      'reference' => 'aef7b953107264f00234902a3880eb50dafc48be',
    ),
    'cebe/markdown' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.2.x-dev',
      ),
      'reference' => '2b2461bed9e15305486319ee552bafca75d1cdaa',
    ),
    'codeception/codeception' => 
    array (
      'pretty_version' => '4.1.x-dev',
      'version' => '4.1.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '76ed7815922df2b958a5a8368acbb3532f7652eb',
    ),
    'codeception/lib-asserts' => 
    array (
      'pretty_version' => '1.13.2',
      'version' => '1.13.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '184231d5eab66bc69afd6b9429344d80c67a33b6',
    ),
    'codeception/lib-innerbrowser' => 
    array (
      'pretty_version' => '1.4.2',
      'version' => '1.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4ffb91c18e4cacd073ff2914c07e5ccaf5efe449',
    ),
    'codeception/module-asserts' => 
    array (
      'pretty_version' => '1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '59374f2fef0cabb9e8ddb53277e85cdca74328de',
    ),
    'codeception/module-filesystem' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '781be167fb1557bfc9b61e0a4eac60a32c534ec1',
    ),
    'codeception/module-yii2' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e2eaeb414315271d545e17c330b3aaf08911927',
    ),
    'codeception/phpunit-wrapper' => 
    array (
      'pretty_version' => '8.1.4',
      'version' => '8.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f41335f0b4dd17cf7bbc63e87943b3ae72a8bbc3',
    ),
    'codeception/stub' => 
    array (
      'pretty_version' => '3.7.0',
      'version' => '3.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '468dd5fe659f131fc997f5196aad87512f9b1304',
    ),
    'codeception/verify' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa0bb946b6d61279f461bcc5a677ac0ed5eab9b3',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.5.x-dev',
      'version' => '1.5.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '6410c4b8352cb64218641457cef64997e6b784fb',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.3.x-dev',
      'version' => '1.3.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '59bfb3b9be04237be4cd1afea9bbb58794c25ce8',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '3.x-dev',
      'version' => '3.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'c81f18a3efb941d8c4d2e025f6183b5c6d697307',
    ),
    'ezyang/htmlpurifier' => 
    array (
      'pretty_version' => 'v4.13.0',
      'version' => '4.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
    ),
    'fakerphp/faker' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '1.15.x-dev',
      ),
      'reference' => '2e032fe3b37c2e85724ac7badcbef540a0bcc496',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.x-dev',
      'version' => '1.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '359b1f4a6fc1f3b97f8ea8ffd5a576f4f5151cff',
    ),
    'kartik-v/yii2-krajee-base' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.0.x-dev',
      ),
      'reference' => '8aa48bb2e7613db45b3c34f7a9346d7f43b1f4ec',
    ),
    'kartik-v/yii2-widget-datepicker' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.4.x-dev',
      ),
      'reference' => '98257627814abf52aa8c1e6dc020d8eb6c1c39b5',
    ),
    'kartik-v/yii2-widget-select2' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.2.x-dev',
      ),
      'reference' => '05ed365ea5ed3555646db27dfb9beea79757a054',
    ),
    'mdmsoft/yii2-admin' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.x-dev',
      ),
      'reference' => '10e526fbcf6350ed4cc9ba6298f887d611685367',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.x-dev',
      'version' => '1.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '776f831124e9c62e1a2c601ecc52e776d8bb7220',
      'replaced' => 
      array (
        0 => '1.x-dev',
      ),
    ),
    'npm-asset/bootstrap' => 
    array (
      'pretty_version' => '4.6.0',
      'version' => '4.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'opis/closure' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '3.6.x-dev',
      ),
      'reference' => '06b4961aabf900c72a20b7000bfa10fd7ae3035e',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.0.x-dev',
      ),
      'reference' => '85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bae7c545bef187884426f042434e561ab1ddb182',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.x-dev',
      ),
      'reference' => 'cf8df60735d98fd18070b7cab0019ba0831e219c',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '5.x-dev',
      ),
      'reference' => 'f8d350d8514ff60b5993dd0121c62299480c989c',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.x-dev',
      'version' => '1.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '6759f2268deb9f329812679e9dcb2d0083b2a30b',
    ),
    'phpspec/php-diff' => 
    array (
      'pretty_version' => 'v1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fc1156187f9f6c8395886fe85ed88a0a245d72e9',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => '1.13.0',
      'version' => '1.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'be1996ed8adc35c3fd795488a653f4b518be70ea',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '7.0.x-dev',
      'version' => '7.0.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'bb7c9a210c72e4709cdde67f8b7362f672f2225c',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '2.0.x-dev',
      'version' => '2.0.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '4b49fb70f067272b659ef0174ff9ca40fdaa6357',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '2.1.x-dev',
      'version' => '2.1.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '2454ae1765516d20c4ffe103d85a58a9a3bd5662',
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '4.0.x-dev',
      ),
      'reference' => '76fc0567751d177847112bd3e26e4890529c98da',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '8.5.x-dev',
      'version' => '8.5.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '5071503c50b1ac3f5cb23ef9af123fe64f3ab0d2',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.x-dev',
      'version' => '1.1.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.0.x-dev',
      ),
      'reference' => 'aa4f89e91c423b516ff226c50dc83f824011c253',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.0.x-dev',
      ),
      'reference' => 'efd67d1dc14a7ef4fc4e518e7dee91c271d524e4',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'rmrevin/yii2-fontawesome' => 
    array (
      'pretty_version' => '3.x-dev',
      'version' => '3.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'a1b448cef7e03a0b5a6286276bef004efa83f323',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '1.0.x-dev',
      'version' => '1.0.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '1de8cd5c010cb153fcd68b8d0f64606f523f7619',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '3.0.x-dev',
      'version' => '3.0.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '1071dfcef776a57013124ff35e1fc41ccd294758',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '3.0.x-dev',
      'version' => '3.0.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '4.2.x-dev',
      'version' => '4.2.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'd47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '3.1.x-dev',
      'version' => '3.1.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '6b853149eab67d4da22291d36f5b0631c0fd856e',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '3.0.x-dev',
      'version' => '3.0.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '474fb9edb7ab891665d3bfc6317f42a0a150454b',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '3.0.x-dev',
      'version' => '3.0.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '1.1.x-dev',
      'version' => '1.1.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '3.0.x-dev',
      'version' => '3.0.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '367dcba38d6e1977be014dc4b22f47a484dac7fb',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '2.0.x-dev',
      'version' => '2.0.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '31d35ca87926450c44eae7e2611d45a7a65ea8b3',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '1.1.x-dev',
      'version' => '1.1.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '0150cfbc4495ed2df3872fb31b26781e4e077eb4',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
    ),
    'select2/select2' => 
    array (
      'pretty_version' => 'dev-develop',
      'version' => 'dev-develop',
      'aliases' => 
      array (
        0 => '9999999-dev',
      ),
      'reference' => '0a30b0b3e67843c09b0bcc4d01e65b72d9b1279f',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '6.2.x-dev',
      ),
      'reference' => '0cf10304599829a2ce0881d13813df80ff4b431f',
    ),
    'symfony/browser-kit' => 
    array (
      'pretty_version' => '3.4.x-dev',
      'version' => '3.4.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '9590bd3d3f9fa2f28d34b713ed4765a8cc8ad15c',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => '5.x-dev',
      'version' => '5.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'fb7e2447d39984358343685fb9f0e800cd79e6a3',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => '5.x-dev',
      'version' => '5.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'f65f217b3314504a1ec99c2d6ef69016bb13490f',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '2.4.x-dev',
      ),
      'reference' => '5f38c8804a9e97d23e0c8d63341088cd8a22d627',
    ),
    'symfony/dom-crawler' => 
    array (
      'pretty_version' => '4.4.x-dev',
      'version' => '4.4.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'be133557f1b0e6672367325b508e65da5513a311',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => '5.x-dev',
      'version' => '5.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '36b7381b24e5dd64f561073186cfffedb2d988db',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '2.4.x-dev',
      ),
      'reference' => '69fee1ad2332a7cbab3aca13591953da9cdb7a11',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => '5.x-dev',
      'version' => '5.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '0d639a0943822626290d169965804f79400e6a04',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '1.22.x-dev',
      ),
      'reference' => 'c6c942b1ac76c82448322025e084cadc56048b4e',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '1.22.x-dev',
      ),
      'reference' => '06fb361659649bcfd6a208a0f1fcaf4e827ad342',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '1.22.x-dev',
      ),
      'reference' => '5601e09b69f26c1828b13b6bb87cb07cddba3170',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '1.22.x-dev',
      ),
      'reference' => '3709eb82b37c8d6eb23cf10ef19b27b3312d1632',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '1.22.x-dev',
      ),
      'reference' => '43a0283138253ed1d48d352ab6d0bdb3f809f248',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '1.22.x-dev',
      ),
      'reference' => '5232de97ee3b75b0360528dae24e73db49566ab1',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '1.22.x-dev',
      ),
      'reference' => 'cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '1.22.x-dev',
      ),
      'reference' => 'a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '1.22.x-dev',
      ),
      'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '2.4.x-dev',
      ),
      'reference' => 'f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => '5.x-dev',
      'version' => '5.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '01454c66c88a6bb4449dcdeb913e463e075f331b',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => '5.x-dev',
      'version' => '5.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'e61bcd0d1665da9f6f5ffbd449a1c00f5b3de46a',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '75a63c33a8577608444246075ea0af0d052e452a',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.10.x-dev',
      ),
      'reference' => 'f07851c5b43e4cb502c24068620e9af6cbdd953f',
    ),
    'yiisoft/yii2' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.0.x-dev',
      ),
      'reference' => '094620a94e3ebf52955d314fa48f100f1b710294',
    ),
    'yiisoft/yii2-app-advanced' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'yiisoft/yii2-bootstrap' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.0.x-dev',
      ),
      'reference' => 'c45bf125671f3f6237a605241486a6dd35b142a7',
    ),
    'yiisoft/yii2-bootstrap4' => 
    array (
      'pretty_version' => '2.0.9',
      'version' => '2.0.9.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a75555e4a888508416fadfd0a2b94881342cdd45',
    ),
    'yiisoft/yii2-composer' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.0.x-dev',
      ),
      'reference' => 'b994e9678e34c2d17008c42a29fedb29d9ebf80b',
    ),
    'yiisoft/yii2-debug' => 
    array (
      'pretty_version' => '2.1.16',
      'version' => '2.1.16.0',
      'aliases' => 
      array (
      ),
      'reference' => '0d8ce76b2dd036a5fc38b26434e1c672ad8975a9',
    ),
    'yiisoft/yii2-faker' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.0.x-dev',
      ),
      'reference' => '360beb2d702c82ea02a5334c11b12d9a60563269',
    ),
    'yiisoft/yii2-gii' => 
    array (
      'pretty_version' => '2.1.4',
      'version' => '2.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd879cb186361fbc6f71a2d994d580b5a071a5642',
    ),
    'yiisoft/yii2-swiftmailer' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.1.x-dev',
      ),
      'reference' => 'd7d02545995e75574eae13184ded2984edba2728',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
