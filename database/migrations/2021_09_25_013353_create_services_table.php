<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Service;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
        });

        $titles = array(
            'Единовременное пособие при рождении ребенка',
            'Ежемесячное пособие по уходу за ребенком (до 1,5 лет)',
            'Единовременное пособие женщинам, вставшим на учет в медицинских организациях в ранние сроки беременности',
            'Пособие по беременности и родам женщинам, уволенным в связи с ликвидацией организаций',
            'Единовременное пособие беременной жене военнослужащего, проходящего военную службу по призыву',
            'Ежемесячное пособие на ребенка военнослужащего, проходящего военную службу по призыву',
            'Ежемесячная выплата в связи с рождением первого ребенка',
            'Ежемесячное пособие детям отдельных категорий военнослужащих, погибших при исполнении обязанностей военной службы по призыву',
            'Пособие на проведение летнего оздоровительного отдыха детей военнослужащих, проходивших военную службу по призыву и погибших без вести и ставших инвалидами в связи с выполнением задач в ходе операций на территории Северо-Кавказского региона ',
            'Компенсация нетрудоустроенным женщинам, имеющим детей в возрасте до 3-х лет, уволенным в связи с ликвидацией организаций',
            '(с 01.01.2020 Указом Президента РФ от 25.11.2019 № 570 «О внесении изменения в Указ Президента Российской Федерации от 7 мая 2012 г. N 606 \"\"О мерах по реализации демографической политики Российской Федерации\"\" и признании утратившими силу некоторых актов Президента Российской Федерации» отменена, ежемесячные компенсационные выплаты назначены до дня вступления в силу Указа № 570, право на их получение до окончания установленных периодов выплаты)',
            'Компенсация в возмещение вреда гражданам, подвергшихся воздействию радиации (ЧАЭС, ПО «Маяк», ПОР, Семипалатинск) 9 видов различных компенсаций (ежемесячная денежная компенсация на приобретение продовольственных товаров; ежемесячная денежная компенсация в возмещение вреда здоровью; получение дополнительного оплачиваемого отпуска; ежегодная компенсация за вред здоровью; ежемесячная компенсация на питание детей; единовременная компенсация за вред здоровью; ежемесячная компенсация за потерю кормильца; единовременная компенсация за потерю кормильца; компенсация расходов на оплату жилых помещений и коммунальных услуг; пособие на погребение)',
            'Ежемесячная денежная компенсация на приобретение продовольственных товаров',
            'Ежегодный дополнительный оплачиваемый отпуск',
            'Ежемесячная денежная компенсация в возмещение вреда, причиненного здоровью в связи с радиационным воздействием вследствие чернобыльской катастрофы либо с выполнением работ по ликвидации последствий катастрофы на Чернобыльской АЭС',
            'Ежемесячная денежная компенсация в возмещение вреда, причиненного здоровью в связи с радиационным воздействием вследствие чернобыльской катастрофы и повлекшего утрату трудоспособности (без установления инвалидности)',
            'Ежемесячная компенсация на питание',
            'школьников, если они не посещают школу в период учебного процесса по медицинским показаниям',
            'Ежемесячная компенсация на питание обучающихся по образовательным программам дошкольного образования, если они не посещают организацию, осуществляющую образовательную деятельность, по медицинским показаниям',
            'Ежемесячная компенсация за потерю кормильца - участника ликвидации последствий катастрофы на Чернобыльской АЭС на каждого нетрудоспособного члена семьи независимо от размера пенсии',
            'Ежегодная компенсация за вред здоровью вследствие чернобыльской катастрофы (часть первая статьи 39 Закона)',
            'Ежегодная компенсация на оздоровление (статья 40 Закона)',
            'Ежегодная компенсация детям, потерявшим кормильца (часть третья статьи 41 Закона)',
            'Единовременная компенсация семьям, потерявшим кормильца вследствие чернобыльской катастрофы',
            'Пособие на погребение',
            'Ежемесячная денежная компенсация расходов на оплату жилищно-коммунальных услуг отдельным федеральным категориям граждан ',
            'Ежегодная денежная выплата Почетным донорам России',
            'Компенсация страховых премий по договору обязательного страхования гражданской ответственности владельцев транспортных средств инвалидам, получившим транспортные средства через органы социальной защиты населения ',
            'Денежная компенсация реабилитированным лицам за конфискованное, изъятое и вышедшее иным путем из их владения имущество ',
            'Ежемесячная денежная компенсация инвалидам вследствие военной травмы и членам их семей в случае их гибели (смерти)',
            'Денежные средства на проведение ремонта индивидуальных жилых домов, принадлежащих членам семей военнослужащих, потерявших кормильца',
            'Компенсации членам семей погибших военнослужащих в связи с расходами по оплате ЖКХ',
            'Компенсация расходов на уплату взноса на капитальный ремонт общего имущества в многоквартирном доме отдельным категориям граждан',
            'Единовременное пособие гражданам при возникновении у них поствакцинальных осложнений',
            'Ежемесячная денежная компенсация гражданам при возникновении у них поствакцинальных осложнений',
            'Единовременное пособие беременным безработным женщинам',
            'Ежемесячное пособие на ребенка гражданам, имеющим детей',
            'Ежемесячная денежная выплата при рождении в семье после 31 декабря 2017 года третьего ребенка или последующих детей',
            'Ежемесячная денежная выплату на ребенка в возрасте от трех до семи лет включительно',
            'Ежемесячная денежная выплата труженикам тыла',
            'Ежемесячная денежная выплата ветеранам труда',
            'Ежемесячная денежная выплата гражданам, родившимся ранее 1 января 1946 года и не получающих иные меры социальной поддержки',
            'Ежемесячная денежная выплата реабилитированным гражданам и жертвам политических репрессий',
            'Ежемесячная денежная компенсация расходов на оплату жилищно-коммунальных услуг ветеранам труда',
            'Ежемесячная денежная компенсация расходов на оплату жилищно-коммунальных услуг реабилитированным гражданам и жертвам политических репрессий',
            'Пособие на погребение безработных граждан',
            'Ежегодная денежная выплата инвалидам боевых действий по призыву',
            'Единовременное денежное вознаграждение матерям, награжденным знаком отличия «Материнская слава»',
            'Единовременное денежное вознаграждение гражданам, награжденным знаком отличия «Родительская слава»',
            'Выплаты «Золотым юбилярам»',
            'Государственная социальная помощь малоимущим гражданам и гражданам, оказавшимся в трудной жизненной ситуации ',
            'Государственная социальная помощь на основании социального контракта',
            'Единовременная материальная помощь студенческим семьям при рождении ребенка ',
            'Единовременная материальная помощь семьям, направляющим детей-инвалидов на продолжительное лечение или операции',
            'Помощь в виде компенсации на приобретение одежды и обуви для подготовки детей к школе',
            'Единовременная выплата на проведение ремонта жилых помещений',
            'Ежемесячное денежное вознаграждение Почетным гражданам Удмуртской Республики и их вдовам',
            'Пенсия по старости лицам, работавшим (работающим) в учреждениях противопожарной службы Удмуртской Республики, в профессиональных аварийно-спасательных службах, профессиональных аварийно-спасательных формированиях Удмуртской Республики',
            'Пенсии за выслугу лет государственным гражданским служащим Удмуртской Республики ',
            'Ежемесячные доплаты к пенсии лицам, замещавшим государственные должности, должности в органах представительной и исполнительной власти УАССР (Удмуртской Республики), в органах государственной власти и управления УАССР (Удмуртской Республики)',
            'Единовременное пособие в случае гибели, смерти народного дружинника, причинения народному дружиннику телесного повреждения или иного вреда здоровью ',
        );
        for ($i = 0; $i < count($titles); $i++) {
              Service::insert([
                  'title' => $titles[$i]
              ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
