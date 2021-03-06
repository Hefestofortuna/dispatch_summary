PGDMP     )    8                y            dispatch_summary    12.7    13.2 �   �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16393    dispatch_summary    DATABASE     m   CREATE DATABASE dispatch_summary WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Russian_Russia.1251';
     DROP DATABASE dispatch_summary;
                postgres    false            �            1259    26426 	   auto_list    TABLE     x  CREATE TABLE public.auto_list (
    id integer NOT NULL,
    organization_id integer NOT NULL,
    putdate date NOT NULL,
    auto_id integer NOT NULL,
    user_id integer NOT NULL,
    hour integer NOT NULL,
    mileage integer NOT NULL,
    consumption_liter double precision NOT NULL,
    kiloton double precision NOT NULL,
    consumption_ton double precision NOT NULL
);
    DROP TABLE public.auto_list;
       public         heap    postgres    false            �           0    0     COLUMN auto_list.organization_id    COMMENT     P   COMMENT ON COLUMN public.auto_list.organization_id IS 'Предприятие';
          public          postgres    false    233            �           0    0    COLUMN auto_list.putdate    COMMENT     :   COMMENT ON COLUMN public.auto_list.putdate IS 'Дата';
          public          postgres    false    233            �           0    0    COLUMN auto_list.auto_id    COMMENT     L   COMMENT ON COLUMN public.auto_list.auto_id IS 'Автотранспорт';
          public          postgres    false    233            �           0    0    COLUMN auto_list.user_id    COMMENT     H   COMMENT ON COLUMN public.auto_list.user_id IS 'Регистратор';
          public          postgres    false    233            �           0    0    COLUMN auto_list.hour    COMMENT     7   COMMENT ON COLUMN public.auto_list.hour IS 'Часы';
          public          postgres    false    233            �           0    0    COLUMN auto_list.mileage    COMMENT     >   COMMENT ON COLUMN public.auto_list.mileage IS 'Пробег';
          public          postgres    false    233            �           0    0 "   COLUMN auto_list.consumption_liter    COMMENT     ^   COMMENT ON COLUMN public.auto_list.consumption_liter IS 'Расход топлива в л.';
          public          postgres    false    233            �           0    0    COLUMN auto_list.kiloton    COMMENT     T   COMMENT ON COLUMN public.auto_list.kiloton IS 'Расход топлива в л.';
          public          postgres    false    233            �           0    0     COLUMN auto_list.consumption_ton    COMMENT     \   COMMENT ON COLUMN public.auto_list.consumption_ton IS 'Расход топлива в т.';
          public          postgres    false    233            �            1259    26424    auto_list_id_seq    SEQUENCE     �   CREATE SEQUENCE public.auto_list_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.auto_list_id_seq;
       public          postgres    false    233            �           0    0    auto_list_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.auto_list_id_seq OWNED BY public.auto_list.id;
          public          postgres    false    232            �            1259    26434    auto_service    TABLE     �   CREATE TABLE public.auto_service (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    period_odometr integer,
    period_date integer
);
     DROP TABLE public.auto_service;
       public         heap    postgres    false            �           0    0    COLUMN auto_service.title    COMMENT     K   COMMENT ON COLUMN public.auto_service.title IS 'Наименование';
          public          postgres    false    235            �           0    0 "   COLUMN auto_service.period_odometr    COMMENT     l   COMMENT ON COLUMN public.auto_service.period_odometr IS 'Периодичность по одометру';
          public          postgres    false    235            �           0    0    COLUMN auto_service.period_date    COMMENT     a   COMMENT ON COLUMN public.auto_service.period_date IS 'Периодичность по дате';
          public          postgres    false    235            �            1259    26432    auto_service_id_seq    SEQUENCE     �   CREATE SEQUENCE public.auto_service_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.auto_service_id_seq;
       public          postgres    false    235            �           0    0    auto_service_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.auto_service_id_seq OWNED BY public.auto_service.id;
          public          postgres    false    234            �            1259    26418    autotransport    TABLE     �  CREATE TABLE public.autotransport (
    id integer NOT NULL,
    date date NOT NULL,
    subdivision_id integer,
    target character varying(255) NOT NULL,
    contact_user_id integer NOT NULL,
    user_id integer NOT NULL,
    auto_id integer,
    driver_user_id integer,
    time_arrival time(0) without time zone,
    time_departure time(0) without time zone,
    odometr integer,
    status boolean NOT NULL,
    organization_id integer NOT NULL
);
 !   DROP TABLE public.autotransport;
       public         heap    postgres    false            �           0    0    COLUMN autotransport.date    COMMENT     ;   COMMENT ON COLUMN public.autotransport.date IS 'Дата';
          public          postgres    false    231            �           0    0 #   COLUMN autotransport.subdivision_id    COMMENT     W   COMMENT ON COLUMN public.autotransport.subdivision_id IS 'Подразделение';
          public          postgres    false    231            �           0    0    COLUMN autotransport.target    COMMENT     L   COMMENT ON COLUMN public.autotransport.target IS 'Цель поездки';
          public          postgres    false    231            �           0    0 $   COLUMN autotransport.contact_user_id    COMMENT     F   COMMENT ON COLUMN public.autotransport.contact_user_id IS 'Кому';
          public          postgres    false    231            �           0    0    COLUMN autotransport.user_id    COMMENT     N   COMMENT ON COLUMN public.autotransport.user_id IS 'Пользователь';
          public          postgres    false    231            �           0    0    COLUMN autotransport.auto_id    COMMENT     P   COMMENT ON COLUMN public.autotransport.auto_id IS 'Автотранспорт';
          public          postgres    false    231            �           0    0 #   COLUMN autotransport.driver_user_id    COMMENT     M   COMMENT ON COLUMN public.autotransport.driver_user_id IS 'Водитель';
          public          postgres    false    231            �           0    0 !   COLUMN autotransport.time_arrival    COMMENT     V   COMMENT ON COLUMN public.autotransport.time_arrival IS 'Время прибытия';
          public          postgres    false    231            �           0    0 #   COLUMN autotransport.time_departure    COMMENT     ^   COMMENT ON COLUMN public.autotransport.time_departure IS 'Время отправления';
          public          postgres    false    231            �           0    0    COLUMN autotransport.odometr    COMMENT     W   COMMENT ON COLUMN public.autotransport.odometr IS 'Время отправления';
          public          postgres    false    231            �           0    0    COLUMN autotransport.status    COMMENT     C   COMMENT ON COLUMN public.autotransport.status IS 'Одометр';
          public          postgres    false    231            �           0    0 $   COLUMN autotransport.organization_id    COMMENT     T   COMMENT ON COLUMN public.autotransport.organization_id IS 'Согласовано';
          public          postgres    false    231            �            1259    26416    autotransport_id_seq    SEQUENCE     �   CREATE SEQUENCE public.autotransport_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.autotransport_id_seq;
       public          postgres    false    231            �           0    0    autotransport_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.autotransport_id_seq OWNED BY public.autotransport.id;
          public          postgres    false    230            �            1259    26442    briefing    TABLE     �   CREATE TABLE public.briefing (
    id integer NOT NULL,
    employee_user_id integer NOT NULL,
    putdate date NOT NULL,
    instructor_user_id integer NOT NULL,
    type integer DEFAULT 1 NOT NULL,
    period integer DEFAULT 1,
    putdate_next date
);
    DROP TABLE public.briefing;
       public         heap    postgres    false            �           0    0     COLUMN briefing.employee_user_id    COMMENT     L   COMMENT ON COLUMN public.briefing.employee_user_id IS 'Сотрудник';
          public          postgres    false    237            �           0    0    COLUMN briefing.putdate    COMMENT     N   COMMENT ON COLUMN public.briefing.putdate IS 'Дата проведения';
          public          postgres    false    237            �           0    0 "   COLUMN briefing.instructor_user_id    COMMENT     P   COMMENT ON COLUMN public.briefing.instructor_user_id IS 'Инструктор';
          public          postgres    false    237            �           0    0    COLUMN briefing.type    COMMENT     K   COMMENT ON COLUMN public.briefing.type IS 'Тип инструктажа';
          public          postgres    false    237            �           0    0    COLUMN briefing.period    COMMENT     J   COMMENT ON COLUMN public.briefing.period IS 'Периодичность';
          public          postgres    false    237            �           0    0    COLUMN briefing.putdate_next    COMMENT     h   COMMENT ON COLUMN public.briefing.putdate_next IS 'Дата следующего проведения';
          public          postgres    false    237            �            1259    26440    briefing_id_seq    SEQUENCE     �   CREATE SEQUENCE public.briefing_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.briefing_id_seq;
       public          postgres    false    237            �           0    0    briefing_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.briefing_id_seq OWNED BY public.briefing.id;
          public          postgres    false    236            	           1259    26605    card    TABLE     a   CREATE TABLE public.card (
    id integer NOT NULL,
    title character varying(255) NOT NULL
);
    DROP TABLE public.card;
       public         heap    postgres    false            �           0    0    COLUMN card.title    COMMENT     C   COMMENT ON COLUMN public.card.title IS 'Наименование';
          public          postgres    false    265                       1259    26603    card_id_seq    SEQUENCE     �   CREATE SEQUENCE public.card_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.card_id_seq;
       public          postgres    false    265            �           0    0    card_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.card_id_seq OWNED BY public.card.id;
          public          postgres    false    264            �            1259    26452    category    TABLE     �   CREATE TABLE public.category (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    parent_id integer DEFAULT 0 NOT NULL,
    otdel_id integer NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.category;
       public         heap    postgres    false            �           0    0    COLUMN category.title    COMMENT     G   COMMENT ON COLUMN public.category.title IS 'Наименование';
          public          postgres    false    239            �           0    0    COLUMN category.parent_id    COMMENT     V   COMMENT ON COLUMN public.category.parent_id IS 'Родительская папка';
          public          postgres    false    239            �           0    0    COLUMN category.otdel_id    COMMENT     <   COMMENT ON COLUMN public.category.otdel_id IS 'Отдел';
          public          postgres    false    239            �           0    0    COLUMN category.organization_id    COMMENT     O   COMMENT ON COLUMN public.category.organization_id IS 'Предприятие';
          public          postgres    false    239            �            1259    26450    category_id_seq    SEQUENCE     �   CREATE SEQUENCE public.category_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.category_id_seq;
       public          postgres    false    239            �           0    0    category_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.category_id_seq OWNED BY public.category.id;
          public          postgres    false    238            �            1259    26461    contact    TABLE       CREATE TABLE public.contact (
    id integer NOT NULL,
    putdate date NOT NULL,
    title character varying(255) NOT NULL,
    text character varying(255) NOT NULL,
    status boolean DEFAULT false NOT NULL,
    user_id integer NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.contact;
       public         heap    postgres    false            �           0    0    COLUMN contact.putdate    COMMENT     8   COMMENT ON COLUMN public.contact.putdate IS 'Дата';
          public          postgres    false    241            �           0    0    COLUMN contact.title    COMMENT     I   COMMENT ON COLUMN public.contact.title IS 'Тема сообщения';
          public          postgres    false    241            �           0    0    COLUMN contact.text    COMMENT     ?   COMMENT ON COLUMN public.contact.text IS 'Сообщение';
          public          postgres    false    241            �           0    0    COLUMN contact.status    COMMENT     A   COMMENT ON COLUMN public.contact.status IS 'Состояние';
          public          postgres    false    241            �           0    0    COLUMN contact.user_id    COMMENT     M   COMMENT ON COLUMN public.contact.user_id IS 'Контактное лицо';
          public          postgres    false    241            �           0    0    COLUMN contact.organization_id    COMMENT     N   COMMENT ON COLUMN public.contact.organization_id IS 'Предприятие';
          public          postgres    false    241            �            1259    26459    contact_id_seq    SEQUENCE     �   CREATE SEQUENCE public.contact_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.contact_id_seq;
       public          postgres    false    241            �           0    0    contact_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.contact_id_seq OWNED BY public.contact.id;
          public          postgres    false    240            -           1259    26806 
   contractor    TABLE     g   CREATE TABLE public.contractor (
    id integer NOT NULL,
    title character varying(255) NOT NULL
);
    DROP TABLE public.contractor;
       public         heap    postgres    false            �           0    0    COLUMN contractor.title    COMMENT     I   COMMENT ON COLUMN public.contractor.title IS 'Наименование';
          public          postgres    false    301            ,           1259    26804    contractor_id_seq    SEQUENCE     �   CREATE SEQUENCE public.contractor_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.contractor_id_seq;
       public          postgres    false    301            �           0    0    contractor_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.contractor_id_seq OWNED BY public.contractor.id;
          public          postgres    false    300            /           1259    26814    contractor_reestr    TABLE     �  CREATE TABLE public.contractor_reestr (
    id integer NOT NULL,
    contractor_id integer NOT NULL,
    station_id integer NOT NULL,
    date_start date NOT NULL,
    date_finish date NOT NULL,
    notice character varying(255) NOT NULL,
    ppr character varying(255) NOT NULL,
    act_dopusk character varying(255) NOT NULL,
    naryad_dopusk character varying(255) NOT NULL,
    act_kabel character varying(255) NOT NULL,
    otv_isp_info character varying(255) NOT NULL,
    otv_ruk_info character varying(255) NOT NULL,
    nadzor_doc character varying(255) NOT NULL,
    nadrzor_otv character varying(255) NOT NULL,
    title character varying(255) NOT NULL,
    haracter character varying(255) NOT NULL,
    organization_id integer NOT NULL
);
 %   DROP TABLE public.contractor_reestr;
       public         heap    postgres    false            �           0    0 &   COLUMN contractor_reestr.contractor_id    COMMENT     i   COMMENT ON COLUMN public.contractor_reestr.contractor_id IS 'Подрядная организация';
          public          postgres    false    303            �           0    0 #   COLUMN contractor_reestr.station_id    COMMENT     Z   COMMENT ON COLUMN public.contractor_reestr.station_id IS 'Станция/Перегон';
          public          postgres    false    303            �           0    0 #   COLUMN contractor_reestr.date_start    COMMENT     R   COMMENT ON COLUMN public.contractor_reestr.date_start IS 'Дата начала';
          public          postgres    false    303            �           0    0 $   COLUMN contractor_reestr.date_finish    COMMENT     [   COMMENT ON COLUMN public.contractor_reestr.date_finish IS 'Дата завершения';
          public          postgres    false    303            �           0    0    COLUMN contractor_reestr.notice    COMMENT     U   COMMENT ON COLUMN public.contractor_reestr.notice IS 'Предупреждение';
          public          postgres    false    303            �           0    0    COLUMN contractor_reestr.ppr    COMMENT     <   COMMENT ON COLUMN public.contractor_reestr.ppr IS 'ППР';
          public          postgres    false    303            �           0    0 #   COLUMN contractor_reestr.act_dopusk    COMMENT     P   COMMENT ON COLUMN public.contractor_reestr.act_dopusk IS 'Акт-допуск';
          public          postgres    false    303            �           0    0 &   COLUMN contractor_reestr.naryad_dopusk    COMMENT     W   COMMENT ON COLUMN public.contractor_reestr.naryad_dopusk IS 'Наряд-допуск';
          public          postgres    false    303            �           0    0 "   COLUMN contractor_reestr.act_kabel    COMMENT     o   COMMENT ON COLUMN public.contractor_reestr.act_kabel IS 'Акт проверки трассы кабелей';
          public          postgres    false    303            �           0    0 %   COLUMN contractor_reestr.otv_isp_info    COMMENT     p   COMMENT ON COLUMN public.contractor_reestr.otv_isp_info IS 'Ответственный исполнитель';
          public          postgres    false    303            �           0    0 %   COLUMN contractor_reestr.otv_ruk_info    COMMENT     r   COMMENT ON COLUMN public.contractor_reestr.otv_ruk_info IS 'Ответственный руководитель';
          public          postgres    false    303            �           0    0 #   COLUMN contractor_reestr.nadzor_doc    COMMENT     [   COMMENT ON COLUMN public.contractor_reestr.nadzor_doc IS '№ и дата приказа';
          public          postgres    false    303            �           0    0 $   COLUMN contractor_reestr.nadrzor_otv    COMMENT     k   COMMENT ON COLUMN public.contractor_reestr.nadrzor_otv IS 'ФИО ответственного по ШЧ';
          public          postgres    false    303            �           0    0    COLUMN contractor_reestr.title    COMMENT     B   COMMENT ON COLUMN public.contractor_reestr.title IS 'Титул';
          public          postgres    false    303            �           0    0 !   COLUMN contractor_reestr.haracter    COMMENT     m   COMMENT ON COLUMN public.contractor_reestr.haracter IS 'Характер выполняемых работ';
          public          postgres    false    303            �           0    0 (   COLUMN contractor_reestr.organization_id    COMMENT     X   COMMENT ON COLUMN public.contractor_reestr.organization_id IS 'Предприятие';
          public          postgres    false    303            .           1259    26812    contractor_reestr_id_seq    SEQUENCE     �   CREATE SEQUENCE public.contractor_reestr_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.contractor_reestr_id_seq;
       public          postgres    false    303            �           0    0    contractor_reestr_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.contractor_reestr_id_seq OWNED BY public.contractor_reestr.id;
          public          postgres    false    302            �            1259    26366    dga    TABLE     �  CREATE TABLE public.dga (
    id integer NOT NULL,
    putdate date NOT NULL,
    time_on time(0) without time zone NOT NULL,
    time_off time(0) without time zone NOT NULL,
    kol integer NOT NULL,
    station_id integer NOT NULL,
    user_id integer NOT NULL,
    "underPressure" integer NOT NULL,
    organization_id integer NOT NULL,
    description character varying(255) NOT NULL,
    moto integer NOT NULL
);
    DROP TABLE public.dga;
       public         heap    postgres    false            �           0    0    COLUMN dga.putdate    COMMENT     4   COMMENT ON COLUMN public.dga.putdate IS 'Дата';
          public          postgres    false    221            �           0    0    COLUMN dga.time_on    COMMENT     2   COMMENT ON COLUMN public.dga.time_on IS 'Вкл';
          public          postgres    false    221            �           0    0    COLUMN dga.time_off    COMMENT     5   COMMENT ON COLUMN public.dga.time_off IS 'Откл';
          public          postgres    false    221            �           0    0    COLUMN dga.kol    COMMENT     K   COMMENT ON COLUMN public.dga.kol IS 'Количество топлива';
          public          postgres    false    221            �           0    0    COLUMN dga.station_id    COMMENT     =   COMMENT ON COLUMN public.dga.station_id IS 'Станция';
          public          postgres    false    221            �           0    0    COLUMN dga.user_id    COMMENT     :   COMMENT ON COLUMN public.dga.user_id IS 'Передал';
          public          postgres    false    221            �           0    0    COLUMN dga."underPressure"    COMMENT     Z   COMMENT ON COLUMN public.dga."underPressure" IS 'Проверка с нагрузкой';
          public          postgres    false    221            �           0    0    COLUMN dga.organization_id    COMMENT     J   COMMENT ON COLUMN public.dga.organization_id IS 'Предприятие';
          public          postgres    false    221            �           0    0    COLUMN dga.description    COMMENT     D   COMMENT ON COLUMN public.dga.description IS 'Примечание';
          public          postgres    false    221            �           0    0    COLUMN dga.moto    COMMENT     9   COMMENT ON COLUMN public.dga.moto IS 'Моточасы';
          public          postgres    false    221            �            1259    26364 
   dga_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dga_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.dga_id_seq;
       public          postgres    false    221            �           0    0 
   dga_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE public.dga_id_seq OWNED BY public.dga.id;
          public          postgres    false    220            �            1259    26358    dga_list    TABLE     �   CREATE TABLE public.dga_list (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    col integer NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.dga_list;
       public         heap    postgres    false            �           0    0    COLUMN dga_list.title    COMMENT     @   COMMENT ON COLUMN public.dga_list.title IS 'Марка ДГА';
          public          postgres    false    219            �           0    0    COLUMN dga_list.col    COMMENT     N   COMMENT ON COLUMN public.dga_list.col IS 'Неснижаемый запас';
          public          postgres    false    219            �           0    0    COLUMN dga_list.organization_id    COMMENT     S   COMMENT ON COLUMN public.dga_list.organization_id IS 'Подразделение';
          public          postgres    false    219            �            1259    26356    dga_list_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dga_list_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.dga_list_id_seq;
       public          postgres    false    219            �           0    0    dga_list_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.dga_list_id_seq OWNED BY public.dga_list.id;
          public          postgres    false    218            �            1259    26473    document    TABLE     �  CREATE TABLE public.document (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    file character varying(255) NOT NULL,
    date_upload timestamp(0) without time zone NOT NULL,
    date_modify timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    "isNews" boolean DEFAULT true NOT NULL,
    user_id integer NOT NULL,
    category_id integer NOT NULL,
    otdel_id integer NOT NULL,
    target integer
);
    DROP TABLE public.document;
       public         heap    postgres    false            �           0    0    COLUMN document.title    COMMENT     ?   COMMENT ON COLUMN public.document.title IS 'Название';
          public          postgres    false    243            �           0    0    COLUMN document.file    COMMENT     >   COMMENT ON COLUMN public.document.file IS 'Документ';
          public          postgres    false    243            �           0    0    COLUMN document.date_upload    COMMENT     N   COMMENT ON COLUMN public.document.date_upload IS 'Дата загрузки';
          public          postgres    false    243            �           0    0    COLUMN document.date_modify    COMMENT     P   COMMENT ON COLUMN public.document.date_modify IS 'Дата изменения';
          public          postgres    false    243            �           0    0    COLUMN document."isNews"    COMMENT     Z   COMMENT ON COLUMN public.document."isNews" IS 'Показывать в новостях';
          public          postgres    false    243            �           0    0    COLUMN document.user_id    COMMENT     I   COMMENT ON COLUMN public.document.user_id IS 'Пользователь';
          public          postgres    false    243            �           0    0    COLUMN document.category_id    COMMENT     X   COMMENT ON COLUMN public.document.category_id IS 'Родительская папка';
          public          postgres    false    243            �           0    0    COLUMN document.otdel_id    COMMENT     <   COMMENT ON COLUMN public.document.otdel_id IS 'Отдел';
          public          postgres    false    243            �           0    0    COLUMN document.target    COMMENT     D   COMMENT ON COLUMN public.document.target IS 'Назначение';
          public          postgres    false    243            �            1259    26471    document_id_seq    SEQUENCE     �   CREATE SEQUENCE public.document_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.document_id_seq;
       public          postgres    false    243            �           0    0    document_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.document_id_seq OWNED BY public.document.id;
          public          postgres    false    242            �            1259    26486    fail    TABLE     �  CREATE TABLE public.fail (
    id integer NOT NULL,
    putdate date NOT NULL,
    date_start date NOT NULL,
    time_start time(0) without time zone DEFAULT '00:00:00'::time without time zone NOT NULL,
    date_finish date NOT NULL,
    time_finish time(0) without time zone DEFAULT '00:00:00'::time without time zone NOT NULL,
    service_id integer NOT NULL,
    description character varying(255) NOT NULL,
    subdivision_id integer NOT NULL,
    user_id integer NOT NULL,
    "character" character varying(255) NOT NULL,
    station_id integer NOT NULL,
    fail_user_id integer,
    organization_id integer NOT NULL,
    system boolean DEFAULT true NOT NULL
);
    DROP TABLE public.fail;
       public         heap    postgres    false            �           0    0    COLUMN fail.putdate    COMMENT     5   COMMENT ON COLUMN public.fail.putdate IS 'Дата';
          public          postgres    false    245            �           0    0    COLUMN fail.date_start    COMMENT     E   COMMENT ON COLUMN public.fail.date_start IS 'Дата начала';
          public          postgres    false    245                        0    0    COLUMN fail.time_start    COMMENT     G   COMMENT ON COLUMN public.fail.time_start IS 'Время начала';
          public          postgres    false    245                       0    0    COLUMN fail.date_finish    COMMENT     L   COMMENT ON COLUMN public.fail.date_finish IS 'Дата окончания';
          public          postgres    false    245                       0    0    COLUMN fail.time_finish    COMMENT     N   COMMENT ON COLUMN public.fail.time_finish IS 'Время окончания';
          public          postgres    false    245                       0    0    COLUMN fail.service_id    COMMENT     <   COMMENT ON COLUMN public.fail.service_id IS 'Служба';
          public          postgres    false    245                       0    0    COLUMN fail.description    COMMENT     ?   COMMENT ON COLUMN public.fail.description IS 'Причина';
          public          postgres    false    245                       0    0    COLUMN fail.subdivision_id    COMMENT     N   COMMENT ON COLUMN public.fail.subdivision_id IS 'Подразделение';
          public          postgres    false    245                       0    0    COLUMN fail.user_id    COMMENT     7   COMMENT ON COLUMN public.fail.user_id IS 'Автор';
          public          postgres    false    245                       0    0    COLUMN fail."character"    COMMENT     A   COMMENT ON COLUMN public.fail."character" IS 'Характер';
          public          postgres    false    245                       0    0    COLUMN fail.station_id    COMMENT     @   COMMENT ON COLUMN public.fail.station_id IS 'Характер';
          public          postgres    false    245            	           0    0    COLUMN fail.fail_user_id    COMMENT     O   COMMENT ON COLUMN public.fail.fail_user_id IS 'Кто расследовал';
          public          postgres    false    245            
           0    0    COLUMN fail.organization_id    COMMENT     K   COMMENT ON COLUMN public.fail.organization_id IS 'Предприятие';
          public          postgres    false    245                       0    0    COLUMN fail.system    COMMENT     8   COMMENT ON COLUMN public.fail.system IS 'КАСАНТ';
          public          postgres    false    245            �            1259    26484    fail_id_seq    SEQUENCE     �   CREATE SEQUENCE public.fail_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.fail_id_seq;
       public          postgres    false    245                       0    0    fail_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.fail_id_seq OWNED BY public.fail.id;
          public          postgres    false    244            W           1259    27004 	   fail_user    TABLE     w   CREATE TABLE public.fail_user (
    id integer NOT NULL,
    fail_id integer NOT NULL,
    user_id integer NOT NULL
);
    DROP TABLE public.fail_user;
       public         heap    postgres    false            V           1259    27002    fail_user_id_seq    SEQUENCE     �   CREATE SEQUENCE public.fail_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.fail_user_id_seq;
       public          postgres    false    343                       0    0    fail_user_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.fail_user_id_seq OWNED BY public.fail_user.id;
          public          postgres    false    342            �            1259    26500    incoming    TABLE       CREATE TABLE public.incoming (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    putdate date NOT NULL,
    num character varying(255) NOT NULL,
    organization_id integer NOT NULL,
    file character varying(255) DEFAULT NULL::character varying
);
    DROP TABLE public.incoming;
       public         heap    postgres    false                       0    0    COLUMN incoming.title    COMMENT     A   COMMENT ON COLUMN public.incoming.title IS 'Заголовок';
          public          postgres    false    247                       0    0    COLUMN incoming.putdate    COMMENT     P   COMMENT ON COLUMN public.incoming.putdate IS 'Дата регистрации';
          public          postgres    false    247                       0    0    COLUMN incoming.num    COMMENT     7   COMMENT ON COLUMN public.incoming.num IS 'Номер';
          public          postgres    false    247                       0    0    COLUMN incoming.organization_id    COMMENT     O   COMMENT ON COLUMN public.incoming.organization_id IS 'Предприятие';
          public          postgres    false    247                       0    0    COLUMN incoming.file    COMMENT     >   COMMENT ON COLUMN public.incoming.file IS 'Документ';
          public          postgres    false    247            �            1259    26498    incoming_id_seq    SEQUENCE     �   CREATE SEQUENCE public.incoming_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.incoming_id_seq;
       public          postgres    false    247                       0    0    incoming_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.incoming_id_seq OWNED BY public.incoming.id;
          public          postgres    false    246            �            1259    26512    incoming_sam    TABLE     �   CREATE TABLE public.incoming_sam (
    id integer NOT NULL,
    docs integer NOT NULL,
    date date NOT NULL,
    isp_user_id integer NOT NULL,
    description character varying(255) NOT NULL,
    status boolean DEFAULT false NOT NULL
);
     DROP TABLE public.incoming_sam;
       public         heap    postgres    false                       0    0    COLUMN incoming_sam.docs    COMMENT     D   COMMENT ON COLUMN public.incoming_sam.docs IS 'Заголовок';
          public          postgres    false    249                       0    0    COLUMN incoming_sam.date    COMMENT     O   COMMENT ON COLUMN public.incoming_sam.date IS 'Срок устранения';
          public          postgres    false    249                       0    0    COLUMN incoming_sam.isp_user_id    COMMENT     O   COMMENT ON COLUMN public.incoming_sam.isp_user_id IS 'Исполнитель';
          public          postgres    false    249                       0    0    COLUMN incoming_sam.description    COMMENT     I   COMMENT ON COLUMN public.incoming_sam.description IS 'Описание';
          public          postgres    false    249                       0    0    COLUMN incoming_sam.status    COMMENT     @   COMMENT ON COLUMN public.incoming_sam.status IS 'Статус';
          public          postgres    false    249            �            1259    26510    incoming_sam_id_seq    SEQUENCE     �   CREATE SEQUENCE public.incoming_sam_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.incoming_sam_id_seq;
       public          postgres    false    249                       0    0    incoming_sam_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.incoming_sam_id_seq OWNED BY public.incoming_sam.id;
          public          postgres    false    248            �            1259    26521    journal_electro    TABLE     �   CREATE TABLE public.journal_electro (
    id integer NOT NULL,
    putdate date NOT NULL,
    indication integer NOT NULL,
    user_id integer NOT NULL,
    spr_electro_id integer NOT NULL,
    organization_id integer NOT NULL
);
 #   DROP TABLE public.journal_electro;
       public         heap    postgres    false                       0    0    COLUMN journal_electro.putdate    COMMENT     d   COMMENT ON COLUMN public.journal_electro.putdate IS 'Дата передачи показания';
          public          postgres    false    251                       0    0 !   COLUMN journal_electro.indication    COMMENT     ^   COMMENT ON COLUMN public.journal_electro.indication IS 'Показание счетчика';
          public          postgres    false    251                       0    0    COLUMN journal_electro.user_id    COMMENT     P   COMMENT ON COLUMN public.journal_electro.user_id IS 'Пользователь';
          public          postgres    false    251                       0    0 %   COLUMN journal_electro.spr_electro_id    COMMENT     a   COMMENT ON COLUMN public.journal_electro.spr_electro_id IS 'Тип счетчика/номер';
          public          postgres    false    251                       0    0 &   COLUMN journal_electro.organization_id    COMMENT     V   COMMENT ON COLUMN public.journal_electro.organization_id IS 'Предприятие';
          public          postgres    false    251            �            1259    26519    journal_electro_id_seq    SEQUENCE     �   CREATE SEQUENCE public.journal_electro_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.journal_electro_id_seq;
       public          postgres    false    251                       0    0    journal_electro_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.journal_electro_id_seq OWNED BY public.journal_electro.id;
          public          postgres    false    250            �            1259    26529    journal_izol    TABLE     ]  CREATE TABLE public.journal_izol (
    id integer NOT NULL,
    station_id integer NOT NULL,
    place character varying(255) NOT NULL,
    mark character varying(255) NOT NULL,
    date_create date NOT NULL,
    r_izol_start double precision DEFAULT '0'::double precision,
    description character varying(255) NOT NULL,
    shns_user_id integer NOT NULL,
    date_finish date,
    step character varying(255) NOT NULL,
    status boolean DEFAULT false NOT NULL,
    r_izol_end double precision,
    date_next date,
    "isDevice" boolean DEFAULT false NOT NULL,
    organization_id integer NOT NULL
);
     DROP TABLE public.journal_izol;
       public         heap    postgres    false                        0    0    COLUMN journal_izol.station_id    COMMENT     U   COMMENT ON COLUMN public.journal_izol.station_id IS 'Станция/Перегон';
          public          postgres    false    253            !           0    0    COLUMN journal_izol.place    COMMENT     =   COMMENT ON COLUMN public.journal_izol.place IS 'Место';
          public          postgres    false    253            "           0    0    COLUMN journal_izol.mark    COMMENT     j   COMMENT ON COLUMN public.journal_izol.mark IS 'Марка укладки и длина кабеля, м';
          public          postgres    false    253            #           0    0    COLUMN journal_izol.date_create    COMMENT     X   COMMENT ON COLUMN public.journal_izol.date_create IS 'Дата обнаружения';
          public          postgres    false    253            $           0    0     COLUMN journal_izol.r_izol_start    COMMENT     L   COMMENT ON COLUMN public.journal_izol.r_izol_start IS 'R изоляции';
          public          postgres    false    253            %           0    0    COLUMN journal_izol.description    COMMENT     I   COMMENT ON COLUMN public.journal_izol.description IS 'Описание';
          public          postgres    false    253            &           0    0     COLUMN journal_izol.shns_user_id    COMMENT     T   COMMENT ON COLUMN public.journal_izol.shns_user_id IS 'Сообщил ШН/ШНС';
          public          postgres    false    253            '           0    0    COLUMN journal_izol.date_finish    COMMENT     V   COMMENT ON COLUMN public.journal_izol.date_finish IS 'Дата устранения';
          public          postgres    false    253            (           0    0    COLUMN journal_izol.step    COMMENT     K   COMMENT ON COLUMN public.journal_izol.step IS 'Принятые меры';
          public          postgres    false    253            )           0    0    COLUMN journal_izol.status    COMMENT     @   COMMENT ON COLUMN public.journal_izol.status IS 'Статус';
          public          postgres    false    253            *           0    0    COLUMN journal_izol.r_izol_end    COMMENT     Y   COMMENT ON COLUMN public.journal_izol.r_izol_end IS 'Текущее R изоляции';
          public          postgres    false    253            +           0    0    COLUMN journal_izol.date_next    COMMENT     Z   COMMENT ON COLUMN public.journal_izol.date_next IS 'Дата след. проверки';
          public          postgres    false    253            ,           0    0    COLUMN journal_izol."isDevice"    COMMENT     Y   COMMENT ON COLUMN public.journal_izol."isDevice" IS 'Кабель/Устройство';
          public          postgres    false    253            -           0    0 #   COLUMN journal_izol.organization_id    COMMENT     ^   COMMENT ON COLUMN public.journal_izol.organization_id IS 'Кабель/Устройство';
          public          postgres    false    253            �            1259    26543    journal_izol_control    TABLE     �   CREATE TABLE public.journal_izol_control (
    id integer NOT NULL,
    journal_izol_id integer NOT NULL,
    putdate integer NOT NULL,
    r_izol double precision DEFAULT '0'::double precision
);
 (   DROP TABLE public.journal_izol_control;
       public         heap    postgres    false            .           0    0 +   COLUMN journal_izol_control.journal_izol_id    COMMENT     Q   COMMENT ON COLUMN public.journal_izol_control.journal_izol_id IS 'Кабель';
          public          postgres    false    255            /           0    0 #   COLUMN journal_izol_control.putdate    COMMENT     V   COMMENT ON COLUMN public.journal_izol_control.putdate IS 'Дата проверки';
          public          postgres    false    255            0           0    0 "   COLUMN journal_izol_control.r_izol    COMMENT     N   COMMENT ON COLUMN public.journal_izol_control.r_izol IS 'R изоляции';
          public          postgres    false    255            �            1259    26541    journal_izol_control_id_seq    SEQUENCE     �   CREATE SEQUENCE public.journal_izol_control_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.journal_izol_control_id_seq;
       public          postgres    false    255            1           0    0    journal_izol_control_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.journal_izol_control_id_seq OWNED BY public.journal_izol_control.id;
          public          postgres    false    254            �            1259    26527    journal_izol_id_seq    SEQUENCE     �   CREATE SEQUENCE public.journal_izol_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.journal_izol_id_seq;
       public          postgres    false    253            2           0    0    journal_izol_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.journal_izol_id_seq OWNED BY public.journal_izol.id;
          public          postgres    false    252                       1259    26552    journal_revision_ot    TABLE     q  CREATE TABLE public.journal_revision_ot (
    id integer NOT NULL,
    date_create date NOT NULL,
    station_id integer NOT NULL,
    subdivision_id integer NOT NULL,
    date_rev date,
    date_time date,
    date_finish date,
    status boolean DEFAULT false NOT NULL,
    revisor integer NOT NULL,
    type integer NOT NULL,
    upload boolean DEFAULT false NOT NULL,
    result integer DEFAULT 0 NOT NULL,
    rev_user_id integer NOT NULL,
    first_kom_user_id integer,
    second_kom_user_id integer,
    time_rev time(0) without time zone DEFAULT NULL::time without time zone,
    organization_id integer NOT NULL
);
 '   DROP TABLE public.journal_revision_ot;
       public         heap    postgres    false            3           0    0 &   COLUMN journal_revision_ot.date_create    COMMENT     ]   COMMENT ON COLUMN public.journal_revision_ot.date_create IS 'Дата назначения';
          public          postgres    false    257            4           0    0 %   COLUMN journal_revision_ot.station_id    COMMENT     \   COMMENT ON COLUMN public.journal_revision_ot.station_id IS 'Станция/перегон';
          public          postgres    false    257            5           0    0 )   COLUMN journal_revision_ot.subdivision_id    COMMENT     ]   COMMENT ON COLUMN public.journal_revision_ot.subdivision_id IS 'Подразделение';
          public          postgres    false    257            6           0    0 #   COLUMN journal_revision_ot.date_rev    COMMENT     V   COMMENT ON COLUMN public.journal_revision_ot.date_rev IS 'Дата проверки';
          public          postgres    false    257            7           0    0 $   COLUMN journal_revision_ot.date_time    COMMENT     [   COMMENT ON COLUMN public.journal_revision_ot.date_time IS 'Срок устранения';
          public          postgres    false    257            8           0    0 &   COLUMN journal_revision_ot.date_finish    COMMENT     ]   COMMENT ON COLUMN public.journal_revision_ot.date_finish IS 'Дата завершения';
          public          postgres    false    257            9           0    0 !   COLUMN journal_revision_ot.status    COMMENT     M   COMMENT ON COLUMN public.journal_revision_ot.status IS 'Устранено';
          public          postgres    false    257            :           0    0 "   COLUMN journal_revision_ot.revisor    COMMENT     N   COMMENT ON COLUMN public.journal_revision_ot.revisor IS 'Устранено';
          public          postgres    false    257            ;           0    0    COLUMN journal_revision_ot.type    COMMENT     K   COMMENT ON COLUMN public.journal_revision_ot.type IS 'Заголовок';
          public          postgres    false    257            <           0    0 !   COLUMN journal_revision_ot.upload    COMMENT     E   COMMENT ON COLUMN public.journal_revision_ot.upload IS 'Отчет';
          public          postgres    false    257            =           0    0 !   COLUMN journal_revision_ot.result    COMMENT     G   COMMENT ON COLUMN public.journal_revision_ot.result IS 'Оценка';
          public          postgres    false    257            >           0    0 &   COLUMN journal_revision_ot.rev_user_id    COMMENT     L   COMMENT ON COLUMN public.journal_revision_ot.rev_user_id IS 'Оценка';
          public          postgres    false    257            ?           0    0 ,   COLUMN journal_revision_ot.first_kom_user_id    COMMENT     o   COMMENT ON COLUMN public.journal_revision_ot.first_kom_user_id IS 'ФИО членов комиссии №1';
          public          postgres    false    257            @           0    0 -   COLUMN journal_revision_ot.second_kom_user_id    COMMENT     p   COMMENT ON COLUMN public.journal_revision_ot.second_kom_user_id IS 'ФИО членов комиссии №2';
          public          postgres    false    257            A           0    0 #   COLUMN journal_revision_ot.time_rev    COMMENT     X   COMMENT ON COLUMN public.journal_revision_ot.time_rev IS 'Время проверки';
          public          postgres    false    257            B           0    0 *   COLUMN journal_revision_ot.organization_id    COMMENT     Z   COMMENT ON COLUMN public.journal_revision_ot.organization_id IS 'Предприятие';
          public          postgres    false    257                       1259    26564    journal_revision_ot_file    TABLE       CREATE TABLE public.journal_revision_ot_file (
    id integer NOT NULL,
    journal_revision_ot_id integer NOT NULL,
    file character varying(255) NOT NULL,
    date_upload date NOT NULL,
    type boolean DEFAULT false NOT NULL,
    title character varying(255) NOT NULL
);
 ,   DROP TABLE public.journal_revision_ot_file;
       public         heap    postgres    false            C           0    0 6   COLUMN journal_revision_ot_file.journal_revision_ot_id    COMMENT     {   COMMENT ON COLUMN public.journal_revision_ot_file.journal_revision_ot_id IS 'Идентификатор проверки';
          public          postgres    false    259            D           0    0 $   COLUMN journal_revision_ot_file.file    COMMENT     F   COMMENT ON COLUMN public.journal_revision_ot_file.file IS 'Файл';
          public          postgres    false    259            E           0    0 +   COLUMN journal_revision_ot_file.date_upload    COMMENT     ^   COMMENT ON COLUMN public.journal_revision_ot_file.date_upload IS 'Дата загрузки';
          public          postgres    false    259            F           0    0 $   COLUMN journal_revision_ot_file.type    COMMENT     U   COMMENT ON COLUMN public.journal_revision_ot_file.type IS 'Тип загрузки';
          public          postgres    false    259            G           0    0 %   COLUMN journal_revision_ot_file.title    COMMENT     Q   COMMENT ON COLUMN public.journal_revision_ot_file.title IS 'Заголовок';
          public          postgres    false    259                       1259    26562    journal_revision_ot_file_id_seq    SEQUENCE     �   CREATE SEQUENCE public.journal_revision_ot_file_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 6   DROP SEQUENCE public.journal_revision_ot_file_id_seq;
       public          postgres    false    259            H           0    0    journal_revision_ot_file_id_seq    SEQUENCE OWNED BY     c   ALTER SEQUENCE public.journal_revision_ot_file_id_seq OWNED BY public.journal_revision_ot_file.id;
          public          postgres    false    258                        1259    26550    journal_revision_ot_id_seq    SEQUENCE     �   CREATE SEQUENCE public.journal_revision_ot_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.journal_revision_ot_id_seq;
       public          postgres    false    257            I           0    0    journal_revision_ot_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.journal_revision_ot_id_seq OWNED BY public.journal_revision_ot.id;
          public          postgres    false    256                       1259    26576    journal_siz    TABLE       CREATE TABLE public.journal_siz (
    id integer NOT NULL,
    station_id integer NOT NULL,
    subdivision_id integer NOT NULL,
    num character varying(255) NOT NULL,
    putdate date NOT NULL,
    name character varying(255) NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.journal_siz;
       public         heap    postgres    false            J           0    0    COLUMN journal_siz.station_id    COMMENT     E   COMMENT ON COLUMN public.journal_siz.station_id IS 'Станция';
          public          postgres    false    261            K           0    0 !   COLUMN journal_siz.subdivision_id    COMMENT     U   COMMENT ON COLUMN public.journal_siz.subdivision_id IS 'Подразделение';
          public          postgres    false    261            L           0    0    COLUMN journal_siz.num    COMMENT     A   COMMENT ON COLUMN public.journal_siz.num IS 'Номер СИЗ';
          public          postgres    false    261            M           0    0    COLUMN journal_siz.putdate    COMMENT     M   COMMENT ON COLUMN public.journal_siz.putdate IS 'Дата проверки';
          public          postgres    false    261            N           0    0    COLUMN journal_siz.name    COMMENT     I   COMMENT ON COLUMN public.journal_siz.name IS 'Наименование';
          public          postgres    false    261            O           0    0 "   COLUMN journal_siz.organization_id    COMMENT     R   COMMENT ON COLUMN public.journal_siz.organization_id IS 'Предприятие';
          public          postgres    false    261                       1259    26574    journal_siz_id_seq    SEQUENCE     �   CREATE SEQUENCE public.journal_siz_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.journal_siz_id_seq;
       public          postgres    false    261            P           0    0    journal_siz_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.journal_siz_id_seq OWNED BY public.journal_siz.id;
          public          postgres    false    260                       1259    26587    journal_spt    TABLE     O  CREATE TABLE public.journal_spt (
    id integer NOT NULL,
    date_create date NOT NULL,
    time_create time(0) without time zone NOT NULL,
    "character" character varying(255) NOT NULL,
    reported character varying(255) NOT NULL,
    spr_spt_id integer NOT NULL,
    date_to date,
    time_to time(0) without time zone DEFAULT NULL::time without time zone,
    pers_to character varying(255) DEFAULT NULL::character varying,
    date_finish date,
    time_finish time(0) without time zone DEFAULT NULL::time without time zone,
    pers_finish character varying(255) DEFAULT NULL::character varying,
    description character varying(255) DEFAULT NULL::character varying,
    status character varying(255) DEFAULT false NOT NULL,
    shd_finish character varying(255) DEFAULT NULL::character varying,
    organization_id integer NOT NULL
);
    DROP TABLE public.journal_spt;
       public         heap    postgres    false            Q           0    0    COLUMN journal_spt.date_create    COMMENT     W   COMMENT ON COLUMN public.journal_spt.date_create IS 'Дата регистрации';
          public          postgres    false    263            R           0    0    COLUMN journal_spt.time_create    COMMENT     Y   COMMENT ON COLUMN public.journal_spt.time_create IS 'Время регистрации';
          public          postgres    false    263            S           0    0    COLUMN journal_spt."character"    COMMENT     c   COMMENT ON COLUMN public.journal_spt."character" IS 'Характер неисправности';
          public          postgres    false    263            T           0    0    COLUMN journal_spt.reported    COMMENT     C   COMMENT ON COLUMN public.journal_spt.reported IS 'Сообщил';
          public          postgres    false    263            U           0    0    COLUMN journal_spt.spr_spt_id    COMMENT     C   COMMENT ON COLUMN public.journal_spt.spr_spt_id IS 'Объект';
          public          postgres    false    263            V           0    0    COLUMN journal_spt.date_to    COMMENT     o   COMMENT ON COLUMN public.journal_spt.date_to IS 'Дата оповещения о неисправности';
          public          postgres    false    263            W           0    0    COLUMN journal_spt.time_to    COMMENT     q   COMMENT ON COLUMN public.journal_spt.time_to IS 'Время оповещения о неисправности';
          public          postgres    false    263            X           0    0    COLUMN journal_spt.pers_to    COMMENT     M   COMMENT ON COLUMN public.journal_spt.pers_to IS 'ФИО/Должность';
          public          postgres    false    263            Y           0    0    COLUMN journal_spt.date_finish    COMMENT     U   COMMENT ON COLUMN public.journal_spt.date_finish IS 'Дата устранения';
          public          postgres    false    263            Z           0    0    COLUMN journal_spt.time_finish    COMMENT     W   COMMENT ON COLUMN public.journal_spt.time_finish IS 'Время устранения';
          public          postgres    false    263            [           0    0    COLUMN journal_spt.pers_finish    COMMENT     L   COMMENT ON COLUMN public.journal_spt.pers_finish IS 'Подтвердил';
          public          postgres    false    263            \           0    0    COLUMN journal_spt.description    COMMENT     L   COMMENT ON COLUMN public.journal_spt.description IS 'Примечание';
          public          postgres    false    263            ]           0    0    COLUMN journal_spt.status    COMMENT     ?   COMMENT ON COLUMN public.journal_spt.status IS 'Статус';
          public          postgres    false    263            ^           0    0    COLUMN journal_spt.shd_finish    COMMENT     _   COMMENT ON COLUMN public.journal_spt.shd_finish IS 'Доложил об устранении';
          public          postgres    false    263            _           0    0 "   COLUMN journal_spt.organization_id    COMMENT     R   COMMENT ON COLUMN public.journal_spt.organization_id IS 'Предприятие';
          public          postgres    false    263                       1259    26585    journal_spt_id_seq    SEQUENCE     �   CREATE SEQUENCE public.journal_spt_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.journal_spt_id_seq;
       public          postgres    false    263            `           0    0    journal_spt_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.journal_spt_id_seq OWNED BY public.journal_spt.id;
          public          postgres    false    262                       1259    26613    kasant    TABLE     ]  CREATE TABLE public.kasant (
    id integer NOT NULL,
    putdate date NOT NULL,
    place character varying(255) NOT NULL,
    cause character varying(255) NOT NULL,
    time_start time(0) without time zone NOT NULL,
    time_finish time(0) without time zone NOT NULL,
    time_total time(0) without time zone NOT NULL,
    service character varying(255) NOT NULL,
    resolution character varying(255) DEFAULT NULL::character varying,
    count integer,
    time_delay time(0) without time zone DEFAULT NULL::time without time zone,
    user_id integer NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.kasant;
       public         heap    postgres    false            a           0    0    COLUMN kasant.putdate    COMMENT     7   COMMENT ON COLUMN public.kasant.putdate IS 'Дата';
          public          postgres    false    267            b           0    0    COLUMN kasant.place    COMMENT     7   COMMENT ON COLUMN public.kasant.place IS 'Место';
          public          postgres    false    267            c           0    0    COLUMN kasant.cause    COMMENT     ;   COMMENT ON COLUMN public.kasant.cause IS 'Причина';
          public          postgres    false    267            d           0    0    COLUMN kasant.time_start    COMMENT     I   COMMENT ON COLUMN public.kasant.time_start IS 'Время начала';
          public          postgres    false    267            e           0    0    COLUMN kasant.time_finish    COMMENT     P   COMMENT ON COLUMN public.kasant.time_finish IS 'Время окончания';
          public          postgres    false    267            f           0    0    COLUMN kasant.time_total    COMMENT     T   COMMENT ON COLUMN public.kasant.time_total IS 'Продолжительность';
          public          postgres    false    267            g           0    0    COLUMN kasant.service    COMMENT     L   COMMENT ON COLUMN public.kasant.service IS 'Виновная служба';
          public          postgres    false    267            h           0    0    COLUMN kasant.resolution    COMMENT     D   COMMENT ON COLUMN public.kasant.resolution IS 'Резолюция';
          public          postgres    false    267            i           0    0    COLUMN kasant.count    COMMENT     U   COMMENT ON COLUMN public.kasant.count IS 'Кол задержанных поезд';
          public          postgres    false    267            j           0    0    COLUMN kasant.time_delay    COMMENT     ^   COMMENT ON COLUMN public.kasant.time_delay IS 'Время задержки проездов';
          public          postgres    false    267            k           0    0    COLUMN kasant.user_id    COMMENT     ?   COMMENT ON COLUMN public.kasant.user_id IS 'Загрузил';
          public          postgres    false    267            l           0    0    COLUMN kasant.organization_id    COMMENT     M   COMMENT ON COLUMN public.kasant.organization_id IS 'Предприятие';
          public          postgres    false    267            
           1259    26611    kasant_id_seq    SEQUENCE     �   CREATE SEQUENCE public.kasant_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.kasant_id_seq;
       public          postgres    false    267            m           0    0    kasant_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.kasant_id_seq OWNED BY public.kasant.id;
          public          postgres    false    266                       1259    26626    kip    TABLE     �  CREATE TABLE public.kip (
    id integer NOT NULL,
    putdate date NOT NULL,
    station_id integer NOT NULL,
    plan integer DEFAULT 0 NOT NULL,
    user_id integer NOT NULL,
    count_sent integer DEFAULT 0 NOT NULL,
    count_install integer DEFAULT 0 NOT NULL,
    organization_id integer NOT NULL,
    date_install integer,
    date_ship integer,
    subdivision_id integer,
    description character varying(255) DEFAULT NULL::character varying
);
    DROP TABLE public.kip;
       public         heap    postgres    false            n           0    0    COLUMN kip.putdate    COMMENT     4   COMMENT ON COLUMN public.kip.putdate IS 'Дата';
          public          postgres    false    269            o           0    0    COLUMN kip.station_id    COMMENT     =   COMMENT ON COLUMN public.kip.station_id IS 'Станция';
          public          postgres    false    269            p           0    0    COLUMN kip.plan    COMMENT     Y   COMMENT ON COLUMN public.kip.plan IS 'Количество приборов (план)';
          public          postgres    false    269            q           0    0    COLUMN kip.user_id    COMMENT     D   COMMENT ON COLUMN public.kip.user_id IS 'Пользователь';
          public          postgres    false    269            r           0    0    COLUMN kip.count_sent    COMMENT     G   COMMENT ON COLUMN public.kip.count_sent IS 'Пользователь';
          public          postgres    false    269            s           0    0    COLUMN kip.count_install    COMMENT     J   COMMENT ON COLUMN public.kip.count_install IS 'Пользователь';
          public          postgres    false    269            t           0    0    COLUMN kip.organization_id    COMMENT     J   COMMENT ON COLUMN public.kip.organization_id IS 'Предприятие';
          public          postgres    false    269            u           0    0    COLUMN kip.date_install    COMMENT     L   COMMENT ON COLUMN public.kip.date_install IS 'Дата установки';
          public          postgres    false    269            v           0    0    COLUMN kip.date_ship    COMMENT     G   COMMENT ON COLUMN public.kip.date_ship IS 'Дата отгрузки';
          public          postgres    false    269            w           0    0    COLUMN kip.subdivision_id    COMMENT     M   COMMENT ON COLUMN public.kip.subdivision_id IS 'Подразделение';
          public          postgres    false    269            x           0    0    COLUMN kip.description    COMMENT     D   COMMENT ON COLUMN public.kip.description IS 'Примечание';
          public          postgres    false    269                       1259    26638 
   kip_device    TABLE     <  CREATE TABLE public.kip_device (
    id integer NOT NULL,
    station_id integer,
    subdivision_id integer NOT NULL,
    type_si character varying(255) NOT NULL,
    num_si character varying(255) NOT NULL,
    pudate date NOT NULL,
    name character varying(255) NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.kip_device;
       public         heap    postgres    false            y           0    0    COLUMN kip_device.station_id    COMMENT     D   COMMENT ON COLUMN public.kip_device.station_id IS 'Станция';
          public          postgres    false    271            z           0    0     COLUMN kip_device.subdivision_id    COMMENT     T   COMMENT ON COLUMN public.kip_device.subdivision_id IS 'Подразделение';
          public          postgres    false    271            {           0    0    COLUMN kip_device.type_si    COMMENT     D   COMMENT ON COLUMN public.kip_device.type_si IS 'Тип/Марка';
          public          postgres    false    271            |           0    0    COLUMN kip_device.num_si    COMMENT     O   COMMENT ON COLUMN public.kip_device.num_si IS 'Заводской номер';
          public          postgres    false    271            }           0    0    COLUMN kip_device.pudate    COMMENT     O   COMMENT ON COLUMN public.kip_device.pudate IS 'Дата колибровки';
          public          postgres    false    271            ~           0    0    COLUMN kip_device.name    COMMENT     H   COMMENT ON COLUMN public.kip_device.name IS 'Наименование';
          public          postgres    false    271                       0    0 !   COLUMN kip_device.organization_id    COMMENT     Q   COMMENT ON COLUMN public.kip_device.organization_id IS 'Предприятие';
          public          postgres    false    271                       1259    26636    kip_device_id_seq    SEQUENCE     �   CREATE SEQUENCE public.kip_device_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.kip_device_id_seq;
       public          postgres    false    271            �           0    0    kip_device_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.kip_device_id_seq OWNED BY public.kip_device.id;
          public          postgres    false    270                       1259    26624 
   kip_id_seq    SEQUENCE     �   CREATE SEQUENCE public.kip_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.kip_id_seq;
       public          postgres    false    269            �           0    0 
   kip_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE public.kip_id_seq OWNED BY public.kip.id;
          public          postgres    false    268                       1259    26649    ksotp_category    TABLE     	  CREATE TABLE public.ksotp_category (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    parent_id integer DEFAULT 0 NOT NULL,
    type integer DEFAULT 0 NOT NULL,
    rating integer DEFAULT 2 NOT NULL,
    control integer DEFAULT 0 NOT NULL
);
 "   DROP TABLE public.ksotp_category;
       public         heap    postgres    false            �           0    0    COLUMN ksotp_category.title    COMMENT     b   COMMENT ON COLUMN public.ksotp_category.title IS 'Описание несоответствия';
          public          postgres    false    273            �           0    0    COLUMN ksotp_category.parent_id    COMMENT     f   COMMENT ON COLUMN public.ksotp_category.parent_id IS 'Описание несоответствия';
          public          postgres    false    273            �           0    0    COLUMN ksotp_category.type    COMMENT     a   COMMENT ON COLUMN public.ksotp_category.type IS 'Описание несоответствия';
          public          postgres    false    273            �           0    0    COLUMN ksotp_category.rating    COMMENT     c   COMMENT ON COLUMN public.ksotp_category.rating IS 'Описание несоответствия';
          public          postgres    false    273            �           0    0    COLUMN ksotp_category.control    COMMENT     V   COMMENT ON COLUMN public.ksotp_category.control IS 'Контрольный лист';
          public          postgres    false    273                       1259    26647    ksotp_category_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ksotp_category_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.ksotp_category_id_seq;
       public          postgres    false    273            �           0    0    ksotp_category_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.ksotp_category_id_seq OWNED BY public.ksotp_category.id;
          public          postgres    false    272            �            1259    26267 	   migration    TABLE     g   CREATE TABLE public.migration (
    version character varying(180) NOT NULL,
    apply_time integer
);
    DROP TABLE public.migration;
       public         heap    postgres    false            �            1259    26326    movement    TABLE       CREATE TABLE public.movement (
    id integer NOT NULL,
    pubdate date NOT NULL,
    subdivision_id integer NOT NULL,
    user_id integer NOT NULL,
    status_id integer NOT NULL,
    work1 text,
    work2 text,
    duty boolean NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.movement;
       public         heap    postgres    false            �           0    0    COLUMN movement.pubdate    COMMENT     9   COMMENT ON COLUMN public.movement.pubdate IS 'Дата';
          public          postgres    false    212            �           0    0    COLUMN movement.subdivision_id    COMMENT     R   COMMENT ON COLUMN public.movement.subdivision_id IS 'Подразделение';
          public          postgres    false    212            �           0    0    COLUMN movement.user_id    COMMENT     I   COMMENT ON COLUMN public.movement.user_id IS 'Пользователь';
          public          postgres    false    212            �           0    0    COLUMN movement.status_id    COMMENT     E   COMMENT ON COLUMN public.movement.status_id IS 'Состояние';
          public          postgres    false    212            �           0    0    COLUMN movement.work1    COMMENT     �   COMMENT ON COLUMN public.movement.work1 IS 'Нахождение работника и выполняемая работа (ДО ОБЕДА)';
          public          postgres    false    212            �           0    0    COLUMN movement.work2    COMMENT     �   COMMENT ON COLUMN public.movement.work2 IS 'Нахождение работника и выполняемая работа (ПОСЛЕ ОБЕДА)';
          public          postgres    false    212            �           0    0    COLUMN movement.duty    COMMENT     @   COMMENT ON COLUMN public.movement.duty IS 'Дежурство';
          public          postgres    false    212            �           0    0    COLUMN movement.organization_id    COMMENT     O   COMMENT ON COLUMN public.movement.organization_id IS 'Предприятие';
          public          postgres    false    212            �            1259    26324    movement_id_seq    SEQUENCE     �   CREATE SEQUENCE public.movement_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.movement_id_seq;
       public          postgres    false    212            �           0    0    movement_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.movement_id_seq OWNED BY public.movement.id;
          public          postgres    false    211                       1259    26661    msu    TABLE     N  CREATE TABLE public.msu (
    id integer NOT NULL,
    date_setup date NOT NULL,
    switch integer NOT NULL,
    power_supply integer DEFAULT 1 NOT NULL,
    msu_num integer NOT NULL,
    msu_year integer NOT NULL,
    msu_perevod_plus numeric(10,3) NOT NULL,
    msu_perevod_min numeric(10,3) NOT NULL,
    msu_friction_plus numeric(10,3) NOT NULL,
    msu_friction_min numeric(10,3) NOT NULL,
    emsu_perevod_plus numeric(10,3) NOT NULL,
    emsu_perevod_min numeric(10,3) NOT NULL,
    emsu_friction_plus numeric(10,3) NOT NULL,
    emsu_friction_min numeric(10,3) NOT NULL,
    emsu_usilie_friction_plus integer NOT NULL,
    emsu_usilie_friction_min integer NOT NULL,
    organization_id integer NOT NULL,
    station_id integer NOT NULL,
    subdivision_id integer NOT NULL,
    user_id integer NOT NULL,
    date_create date NOT NULL
);
    DROP TABLE public.msu;
       public         heap    postgres    false            �           0    0    COLUMN msu.date_setup    COMMENT     J   COMMENT ON COLUMN public.msu.date_setup IS 'Дата установки';
          public          postgres    false    275            �           0    0    COLUMN msu.switch    COMMENT     9   COMMENT ON COLUMN public.msu.switch IS 'Стрелка';
          public          postgres    false    275            �           0    0    COLUMN msu.power_supply    COMMENT     P   COMMENT ON COLUMN public.msu.power_supply IS 'Источник питания';
          public          postgres    false    275            �           0    0    COLUMN msu.msu_num    COMMENT     K   COMMENT ON COLUMN public.msu.msu_num IS '№ двигателя ЭМСУ';
          public          postgres    false    275            �           0    0    COLUMN msu.msu_year    COMMENT     ^   COMMENT ON COLUMN public.msu.msu_year IS 'Год выпуска двигателя ЭМСУ';
          public          postgres    false    275            �           0    0    COLUMN msu.msu_perevod_plus    COMMENT     D   COMMENT ON COLUMN public.msu.msu_perevod_plus IS 'U МСП (+),В';
          public          postgres    false    275            �           0    0    COLUMN msu.msu_perevod_min    COMMENT     C   COMMENT ON COLUMN public.msu.msu_perevod_min IS 'U МСП (-),В';
          public          postgres    false    275            �           0    0    COLUMN msu.msu_friction_plus    COMMENT     U   COMMENT ON COLUMN public.msu.msu_friction_plus IS 'U фрикция МСП (+), В';
          public          postgres    false    275            �           0    0    COLUMN msu.msu_friction_min    COMMENT     T   COMMENT ON COLUMN public.msu.msu_friction_min IS 'U фрикция МСП (-), В';
          public          postgres    false    275            �           0    0    COLUMN msu.emsu_perevod_plus    COMMENT     M   COMMENT ON COLUMN public.msu.emsu_perevod_plus IS 'U ЭМСУ-СП (+), В';
          public          postgres    false    275            �           0    0    COLUMN msu.emsu_perevod_min    COMMENT     L   COMMENT ON COLUMN public.msu.emsu_perevod_min IS 'U ЭМСУ-СП (-), В';
          public          postgres    false    275            �           0    0    COLUMN msu.emsu_friction_plus    COMMENT     ]   COMMENT ON COLUMN public.msu.emsu_friction_plus IS 'U фрикция ЭМСУ-СП (+), В';
          public          postgres    false    275            �           0    0    COLUMN msu.emsu_friction_min    COMMENT     \   COMMENT ON COLUMN public.msu.emsu_friction_min IS 'U фрикция ЭМСУ-СП (-), В';
          public          postgres    false    275            �           0    0 $   COLUMN msu.emsu_usilie_friction_plus    COMMENT     r   COMMENT ON COLUMN public.msu.emsu_usilie_friction_plus IS 'Усилие фрикция ЭМСУ-СП(+), кгс';
          public          postgres    false    275            �           0    0 #   COLUMN msu.emsu_usilie_friction_min    COMMENT     q   COMMENT ON COLUMN public.msu.emsu_usilie_friction_min IS 'Усилие фрикция ЭМСУ-СП(-), кгс';
          public          postgres    false    275            �           0    0    COLUMN msu.organization_id    COMMENT     J   COMMENT ON COLUMN public.msu.organization_id IS 'Предприятие';
          public          postgres    false    275            �           0    0    COLUMN msu.station_id    COMMENT     =   COMMENT ON COLUMN public.msu.station_id IS 'Станция';
          public          postgres    false    275            �           0    0    COLUMN msu.subdivision_id    COMMENT     M   COMMENT ON COLUMN public.msu.subdivision_id IS 'Подразделение';
          public          postgres    false    275            �           0    0    COLUMN msu.user_id    COMMENT     D   COMMENT ON COLUMN public.msu.user_id IS 'Пользователь';
          public          postgres    false    275            �           0    0    COLUMN msu.date_create    COMMENT     I   COMMENT ON COLUMN public.msu.date_create IS 'Дата создания';
          public          postgres    false    275                       1259    26659 
   msu_id_seq    SEQUENCE     �   CREATE SEQUENCE public.msu_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.msu_id_seq;
       public          postgres    false    275            �           0    0 
   msu_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE public.msu_id_seq OWNED BY public.msu.id;
          public          postgres    false    274            Y           1259    27012    news    TABLE     �   CREATE TABLE public.news (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    content text NOT NULL,
    user_id integer NOT NULL,
    putdate date NOT NULL
);
    DROP TABLE public.news;
       public         heap    postgres    false            �           0    0    COLUMN news.title    COMMENT     =   COMMENT ON COLUMN public.news.title IS 'Заголовок';
          public          postgres    false    345            �           0    0    COLUMN news.content    COMMENT     A   COMMENT ON COLUMN public.news.content IS 'Содержание';
          public          postgres    false    345            �           0    0    COLUMN news.user_id    COMMENT     7   COMMENT ON COLUMN public.news.user_id IS 'Автор';
          public          postgres    false    345            �           0    0    COLUMN news.putdate    COMMENT     J   COMMENT ON COLUMN public.news.putdate IS 'Дата публикации';
          public          postgres    false    345            X           1259    27010    news_id_seq    SEQUENCE     �   CREATE SEQUENCE public.news_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.news_id_seq;
       public          postgres    false    345            �           0    0    news_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.news_id_seq OWNED BY public.news.id;
          public          postgres    false    344                       1259    26670    notice    TABLE       CREATE TABLE public.notice (
    id integer NOT NULL,
    give character varying(50) NOT NULL,
    text character varying(255) NOT NULL,
    user_id integer NOT NULL,
    putdate date NOT NULL,
    subdivision_id integer NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.notice;
       public         heap    postgres    false            �           0    0    COLUMN notice.give    COMMENT     9   COMMENT ON COLUMN public.notice.give IS 'Кто дал';
          public          postgres    false    277            �           0    0    COLUMN notice.text    COMMENT     @   COMMENT ON COLUMN public.notice.text IS 'Объявление';
          public          postgres    false    277            �           0    0    COLUMN notice.user_id    COMMENT     G   COMMENT ON COLUMN public.notice.user_id IS 'Пользователь';
          public          postgres    false    277            �           0    0    COLUMN notice.putdate    COMMENT     7   COMMENT ON COLUMN public.notice.putdate IS 'Дата';
          public          postgres    false    277            �           0    0    COLUMN notice.subdivision_id    COMMENT     P   COMMENT ON COLUMN public.notice.subdivision_id IS 'Подразделение';
          public          postgres    false    277            �           0    0    COLUMN notice.organization_id    COMMENT     M   COMMENT ON COLUMN public.notice.organization_id IS 'Предприятие';
          public          postgres    false    277                       1259    26668    notice_id_seq    SEQUENCE     �   CREATE SEQUENCE public.notice_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.notice_id_seq;
       public          postgres    false    277            �           0    0    notice_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.notice_id_seq OWNED BY public.notice.id;
          public          postgres    false    276                       1259    26678 	   oper_rasp    TABLE     Y  CREATE TABLE public.oper_rasp (
    id integer NOT NULL,
    title character varying(128) NOT NULL,
    date_create date NOT NULL,
    file character varying(255) NOT NULL,
    date_finish date,
    status boolean DEFAULT false NOT NULL,
    short_name character varying(8) NOT NULL,
    user_id integer,
    organization_id integer NOT NULL
);
    DROP TABLE public.oper_rasp;
       public         heap    postgres    false            �           0    0    COLUMN oper_rasp.title    COMMENT     S   COMMENT ON COLUMN public.oper_rasp.title IS 'Название документа';
          public          postgres    false    279            �           0    0    COLUMN oper_rasp.date_create    COMMENT     U   COMMENT ON COLUMN public.oper_rasp.date_create IS 'Дата регистрации';
          public          postgres    false    279            �           0    0    COLUMN oper_rasp.file    COMMENT     Q   COMMENT ON COLUMN public.oper_rasp.file IS 'Ссылка на документ';
          public          postgres    false    279            �           0    0    COLUMN oper_rasp.date_finish    COMMENT     S   COMMENT ON COLUMN public.oper_rasp.date_finish IS 'Дата завершения';
          public          postgres    false    279            �           0    0    COLUMN oper_rasp.status    COMMENT     W   COMMENT ON COLUMN public.oper_rasp.status IS 'Отметка о выполнении';
          public          postgres    false    279            �           0    0    COLUMN oper_rasp.short_name    COMMENT     h   COMMENT ON COLUMN public.oper_rasp.short_name IS 'Краткое наименование, номер';
          public          postgres    false    279            �           0    0    COLUMN oper_rasp.user_id    COMMENT     U   COMMENT ON COLUMN public.oper_rasp.user_id IS 'Ответственное лицо';
          public          postgres    false    279            �           0    0     COLUMN oper_rasp.organization_id    COMMENT     P   COMMENT ON COLUMN public.oper_rasp.organization_id IS 'Предприятие';
          public          postgres    false    279                       1259    26687    oper_rasp_file    TABLE     �   CREATE TABLE public.oper_rasp_file (
    id integer NOT NULL,
    oper_rasp_isp_id integer NOT NULL,
    file character varying(256) NOT NULL,
    putdate date NOT NULL
);
 "   DROP TABLE public.oper_rasp_file;
       public         heap    postgres    false            �           0    0 &   COLUMN oper_rasp_file.oper_rasp_isp_id    COMMENT     V   COMMENT ON COLUMN public.oper_rasp_file.oper_rasp_isp_id IS 'Исполнитель';
          public          postgres    false    281            �           0    0    COLUMN oper_rasp_file.file    COMMENT     <   COMMENT ON COLUMN public.oper_rasp_file.file IS 'Файл';
          public          postgres    false    281            �           0    0    COLUMN oper_rasp_file.putdate    COMMENT     T   COMMENT ON COLUMN public.oper_rasp_file.putdate IS 'Дата публикации';
          public          postgres    false    281                       1259    26685    oper_rasp_file_id_seq    SEQUENCE     �   CREATE SEQUENCE public.oper_rasp_file_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.oper_rasp_file_id_seq;
       public          postgres    false    281            �           0    0    oper_rasp_file_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.oper_rasp_file_id_seq OWNED BY public.oper_rasp_file.id;
          public          postgres    false    280                       1259    26676    oper_rasp_id_seq    SEQUENCE     �   CREATE SEQUENCE public.oper_rasp_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.oper_rasp_id_seq;
       public          postgres    false    279            �           0    0    oper_rasp_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.oper_rasp_id_seq OWNED BY public.oper_rasp.id;
          public          postgres    false    278                       1259    26695    oper_rasp_isp    TABLE     J  CREATE TABLE public.oper_rasp_isp (
    id integer NOT NULL,
    oper_rasp_sam_id integer NOT NULL,
    isp_user_id integer NOT NULL,
    description character varying(255),
    date_finish date,
    status boolean NOT NULL,
    oper_rasp_id integer NOT NULL,
    percent integer DEFAULT 0 NOT NULL,
    agreed_user_id integer
);
 !   DROP TABLE public.oper_rasp_isp;
       public         heap    postgres    false            �           0    0 %   COLUMN oper_rasp_isp.oper_rasp_sam_id    COMMENT     b   COMMENT ON COLUMN public.oper_rasp_isp.oper_rasp_sam_id IS 'Пункт распоряжения';
          public          postgres    false    283            �           0    0     COLUMN oper_rasp_isp.isp_user_id    COMMENT     P   COMMENT ON COLUMN public.oper_rasp_isp.isp_user_id IS 'Исполнитель';
          public          postgres    false    283            �           0    0     COLUMN oper_rasp_isp.description    COMMENT     N   COMMENT ON COLUMN public.oper_rasp_isp.description IS 'Примечание';
          public          postgres    false    283            �           0    0     COLUMN oper_rasp_isp.date_finish    COMMENT     N   COMMENT ON COLUMN public.oper_rasp_isp.date_finish IS 'Примечание';
          public          postgres    false    283            �           0    0    COLUMN oper_rasp_isp.status    COMMENT     `   COMMENT ON COLUMN public.oper_rasp_isp.status IS 'Отметка о вы выполнении';
          public          postgres    false    283            �           0    0 !   COLUMN oper_rasp_isp.oper_rasp_id    COMMENT     j   COMMENT ON COLUMN public.oper_rasp_isp.oper_rasp_id IS 'Оперативное распоряжение';
          public          postgres    false    283            �           0    0    COLUMN oper_rasp_isp.percent    COMMENT     J   COMMENT ON COLUMN public.oper_rasp_isp.percent IS 'Примечание';
          public          postgres    false    283            �           0    0 #   COLUMN oper_rasp_isp.agreed_user_id    COMMENT     c   COMMENT ON COLUMN public.oper_rasp_isp.agreed_user_id IS 'Отметка о выполнении';
          public          postgres    false    283                       1259    26693    oper_rasp_isp_id_seq    SEQUENCE     �   CREATE SEQUENCE public.oper_rasp_isp_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.oper_rasp_isp_id_seq;
       public          postgres    false    283            �           0    0    oper_rasp_isp_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.oper_rasp_isp_id_seq OWNED BY public.oper_rasp_isp.id;
          public          postgres    false    282                       1259    26704    oper_rasp_sam    TABLE     �   CREATE TABLE public.oper_rasp_sam (
    id integer NOT NULL,
    oper_rasp_id integer NOT NULL,
    content character varying(512) NOT NULL,
    date date NOT NULL
);
 !   DROP TABLE public.oper_rasp_sam;
       public         heap    postgres    false            �           0    0 !   COLUMN oper_rasp_sam.oper_rasp_id    COMMENT     K   COMMENT ON COLUMN public.oper_rasp_sam.oper_rasp_id IS 'Документ';
          public          postgres    false    285            �           0    0    COLUMN oper_rasp_sam.content    COMMENT     c   COMMENT ON COLUMN public.oper_rasp_sam.content IS 'Содержание распаряжения';
          public          postgres    false    285            �           0    0    COLUMN oper_rasp_sam.date    COMMENT     P   COMMENT ON COLUMN public.oper_rasp_sam.date IS 'Срок исполнения';
          public          postgres    false    285                       1259    26702    oper_rasp_sam_id_seq    SEQUENCE     �   CREATE SEQUENCE public.oper_rasp_sam_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.oper_rasp_sam_id_seq;
       public          postgres    false    285            �           0    0    oper_rasp_sam_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.oper_rasp_sam_id_seq OWNED BY public.oper_rasp_sam.id;
          public          postgres    false    284                       1259    26715    oper_rasp_work    TABLE       CREATE TABLE public.oper_rasp_work (
    id integer NOT NULL,
    oper_rasp_id integer NOT NULL,
    oper_rasp_isp_id integer NOT NULL,
    comment character varying(255) NOT NULL,
    work character varying(255) NOT NULL,
    date_term date,
    date_finish date
);
 "   DROP TABLE public.oper_rasp_work;
       public         heap    postgres    false            �           0    0 "   COLUMN oper_rasp_work.oper_rasp_id    COMMENT     k   COMMENT ON COLUMN public.oper_rasp_work.oper_rasp_id IS 'Оперативное распаряжение';
          public          postgres    false    287            �           0    0 &   COLUMN oper_rasp_work.oper_rasp_isp_id    COMMENT     o   COMMENT ON COLUMN public.oper_rasp_work.oper_rasp_isp_id IS 'Оперативное распаряжение';
          public          postgres    false    287            �           0    0    COLUMN oper_rasp_work.comment    COMMENT     I   COMMENT ON COLUMN public.oper_rasp_work.comment IS 'Замечание';
          public          postgres    false    287            �           0    0    COLUMN oper_rasp_work.work    COMMENT     J   COMMENT ON COLUMN public.oper_rasp_work.work IS 'Мероприятие';
          public          postgres    false    287            �           0    0    COLUMN oper_rasp_work.date_term    COMMENT     V   COMMENT ON COLUMN public.oper_rasp_work.date_term IS 'Срок устранения';
          public          postgres    false    287            �           0    0 !   COLUMN oper_rasp_work.date_finish    COMMENT     X   COMMENT ON COLUMN public.oper_rasp_work.date_finish IS 'Дата завершения';
          public          postgres    false    287                       1259    26713    oper_rasp_work_id_seq    SEQUENCE     �   CREATE SEQUENCE public.oper_rasp_work_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.oper_rasp_work_id_seq;
       public          postgres    false    287            �           0    0    oper_rasp_work_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.oper_rasp_work_id_seq OWNED BY public.oper_rasp_work.id;
          public          postgres    false    286            !           1259    26726    order    TABLE     [  CREATE TABLE public."order" (
    id integer NOT NULL,
    num_off integer NOT NULL,
    station_id integer NOT NULL,
    card_id integer NOT NULL,
    description_off character varying(255) NOT NULL,
    date_off date,
    time_off time(0) without time zone DEFAULT NULL::time without time zone,
    shns_off_user_id integer DEFAULT 0 NOT NULL,
    shchd_off_user_id integer DEFAULT 0 NOT NULL,
    apply_ds character varying(255) DEFAULT ''::character varying NOT NULL,
    apply_shch_user_id integer DEFAULT 0 NOT NULL,
    date_on date,
    time_on time(0) without time zone DEFAULT NULL::time without time zone,
    shns_on_user_id integer DEFAULT 0 NOT NULL,
    shchd_on_user_id integer DEFAULT 0 NOT NULL,
    description_on character varying(255) NOT NULL,
    num_on integer NOT NULL,
    date date NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public."order";
       public         heap    postgres    false            �           0    0    COLUMN "order".num_off    COMMENT     O   COMMENT ON COLUMN public."order".num_off IS 'Номер разрешения';
          public          postgres    false    289            �           0    0    COLUMN "order".station_id    COMMENT     P   COMMENT ON COLUMN public."order".station_id IS 'Станция/Перегон';
          public          postgres    false    289            �           0    0    COLUMN "order".card_id    COMMENT     <   COMMENT ON COLUMN public."order".card_id IS 'Работа';
          public          postgres    false    289            �           0    0    COLUMN "order".description_off    COMMENT     Y   COMMENT ON COLUMN public."order".description_off IS 'Примечание заявки';
          public          postgres    false    289            �           0    0    COLUMN "order".date_off    COMMENT     C   COMMENT ON COLUMN public."order".date_off IS 'Дата выкл.';
          public          postgres    false    289            �           0    0    COLUMN "order".time_off    COMMENT     E   COMMENT ON COLUMN public."order".time_off IS 'Время выкл.';
          public          postgres    false    289            �           0    0    COLUMN "order".shns_off_user_id    COMMENT     P   COMMENT ON COLUMN public."order".shns_off_user_id IS 'Ответ. ШН/ШНС';
          public          postgres    false    289            �           0    0     COLUMN "order".shchd_off_user_id    COMMENT     I   COMMENT ON COLUMN public."order".shchd_off_user_id IS 'ШЧД/ШЧДС';
          public          postgres    false    289            �           0    0    COLUMN "order".apply_ds    COMMENT     F   COMMENT ON COLUMN public."order".apply_ds IS 'Разрешен ДС';
          public          postgres    false    289            �           0    0 !   COLUMN "order".apply_shch_user_id    COMMENT     P   COMMENT ON COLUMN public."order".apply_shch_user_id IS 'Разрешен ШЧ';
          public          postgres    false    289            �           0    0    COLUMN "order".date_on    COMMENT     @   COMMENT ON COLUMN public."order".date_on IS 'Дата вкл.';
          public          postgres    false    289            �           0    0    COLUMN "order".time_on    COMMENT     B   COMMENT ON COLUMN public."order".time_on IS 'Время вкл.';
          public          postgres    false    289            �           0    0    COLUMN "order".shns_on_user_id    COMMENT     O   COMMENT ON COLUMN public."order".shns_on_user_id IS 'Ответ. ШН/ШНС';
          public          postgres    false    289            �           0    0    COLUMN "order".shchd_on_user_id    COMMENT     H   COMMENT ON COLUMN public."order".shchd_on_user_id IS 'ШЧД/ШЧДС';
          public          postgres    false    289            �           0    0    COLUMN "order".description_on    COMMENT     K   COMMENT ON COLUMN public."order".description_on IS 'Примечание';
          public          postgres    false    289            �           0    0    COLUMN "order".num_on    COMMENT     L   COMMENT ON COLUMN public."order".num_on IS 'Номер включения';
          public          postgres    false    289            �           0    0    COLUMN "order".date    COMMENT     5   COMMENT ON COLUMN public."order".date IS 'Дата';
          public          postgres    false    289            �           0    0    COLUMN "order".organization_id    COMMENT     N   COMMENT ON COLUMN public."order".organization_id IS 'Предприятие';
          public          postgres    false    289                        1259    26724    order_id_seq    SEQUENCE     �   CREATE SEQUENCE public.order_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.order_id_seq;
       public          postgres    false    289            �           0    0    order_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.order_id_seq OWNED BY public."order".id;
          public          postgres    false    288            �            1259    26293    organization    TABLE     �   CREATE TABLE public.organization (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    code character varying(255) NOT NULL,
    user_id integer,
    code_asui character varying(255)
);
     DROP TABLE public.organization;
       public         heap    postgres    false            �           0    0    COLUMN organization.title    COMMENT     b   COMMENT ON COLUMN public.organization.title IS 'Наименование предприятия';
          public          postgres    false    206            �           0    0    COLUMN organization.code    COMMENT     :   COMMENT ON COLUMN public.organization.code IS 'Шифр';
          public          postgres    false    206            �           0    0    COLUMN organization.user_id    COMMENT     b   COMMENT ON COLUMN public.organization.user_id IS 'Начальник подразделения';
          public          postgres    false    206            �           0    0    COLUMN organization.code_asui    COMMENT     J   COMMENT ON COLUMN public.organization.code_asui IS 'Код ЕКАСУИ';
          public          postgres    false    206            �            1259    26291    organization_id_seq    SEQUENCE     �   CREATE SEQUENCE public.organization_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.organization_id_seq;
       public          postgres    false    206            �           0    0    organization_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.organization_id_seq OWNED BY public.organization.id;
          public          postgres    false    205            #           1259    26745    ors    TABLE     �  CREATE TABLE public.ors (
    id integer NOT NULL,
    station_id integer NOT NULL,
    sum_main_pch integer DEFAULT 0 NOT NULL,
    sum_main_shch integer DEFAULT 0 NOT NULL,
    sum_main integer DEFAULT 0 NOT NULL,
    putdate date NOT NULL,
    sum_minor_pch integer DEFAULT 0 NOT NULL,
    sum_minor_shch integer DEFAULT 0 NOT NULL,
    sum_minor integer DEFAULT 0 NOT NULL,
    subdivision_id integer,
    description character varying(255) DEFAULT NULL::character varying
);
    DROP TABLE public.ors;
       public         heap    postgres    false            �           0    0    COLUMN ors.station_id    COMMENT     L   COMMENT ON COLUMN public.ors.station_id IS 'Станция/Перегон';
          public          postgres    false    291            �           0    0    COLUMN ors.sum_main_pch    COMMENT     J   COMMENT ON COLUMN public.ors.sum_main_pch IS 'Кол-во ПЧ (осн)';
          public          postgres    false    291            �           0    0    COLUMN ors.sum_main_shch    COMMENT     K   COMMENT ON COLUMN public.ors.sum_main_shch IS 'Кол-во ШЧ (осн)';
          public          postgres    false    291            �           0    0    COLUMN ors.sum_main    COMMENT     @   COMMENT ON COLUMN public.ors.sum_main IS 'Всего (осн)';
          public          postgres    false    291            �           0    0    COLUMN ors.putdate    COMMENT     4   COMMENT ON COLUMN public.ors.putdate IS 'Дата';
          public          postgres    false    291            �           0    0    COLUMN ors.sum_minor_pch    COMMENT     K   COMMENT ON COLUMN public.ors.sum_minor_pch IS 'Кол-во ПЧ (дуб)';
          public          postgres    false    291            �           0    0    COLUMN ors.sum_minor_shch    COMMENT     L   COMMENT ON COLUMN public.ors.sum_minor_shch IS 'Кол-во ШЧ (дуб)';
          public          postgres    false    291            �           0    0    COLUMN ors.sum_minor    COMMENT     A   COMMENT ON COLUMN public.ors.sum_minor IS 'Всего (дуб)';
          public          postgres    false    291            �           0    0    COLUMN ors.subdivision_id    COMMENT     M   COMMENT ON COLUMN public.ors.subdivision_id IS 'Подразделение';
          public          postgres    false    291            �           0    0    COLUMN ors.description    COMMENT     D   COMMENT ON COLUMN public.ors.description IS 'Примечание';
          public          postgres    false    291            "           1259    26743 
   ors_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ors_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.ors_id_seq;
       public          postgres    false    291            �           0    0 
   ors_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE public.ors_id_seq OWNED BY public.ors.id;
          public          postgres    false    290            %           1259    26760    otdel    TABLE     b   CREATE TABLE public.otdel (
    id integer NOT NULL,
    title character varying(255) NOT NULL
);
    DROP TABLE public.otdel;
       public         heap    postgres    false            �           0    0    COLUMN otdel.title    COMMENT     D   COMMENT ON COLUMN public.otdel.title IS 'Наименование';
          public          postgres    false    293            $           1259    26758    otdel_id_seq    SEQUENCE     �   CREATE SEQUENCE public.otdel_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.otdel_id_seq;
       public          postgres    false    293            �           0    0    otdel_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.otdel_id_seq OWNED BY public.otdel.id;
          public          postgres    false    292            '           1259    26768    otkl    TABLE       CREATE TABLE public.otkl (
    id integer NOT NULL,
    putdate date NOT NULL,
    time_from time(0) without time zone DEFAULT '00:00:00'::time without time zone NOT NULL,
    time_to time(0) without time zone DEFAULT '00:00:00'::time without time zone NOT NULL,
    station_id integer NOT NULL,
    description character varying(255) NOT NULL,
    object character varying(255) NOT NULL,
    transfer_user_id integer DEFAULT 0 NOT NULL,
    user_id integer DEFAULT 0 NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.otkl;
       public         heap    postgres    false            �           0    0    COLUMN otkl.putdate    COMMENT     J   COMMENT ON COLUMN public.otkl.putdate IS 'Дата отключения';
          public          postgres    false    295            �           0    0    COLUMN otkl.time_from    COMMENT     <   COMMENT ON COLUMN public.otkl.time_from IS 'Время с';
          public          postgres    false    295            �           0    0    COLUMN otkl.time_to    COMMENT     <   COMMENT ON COLUMN public.otkl.time_to IS 'Время по';
          public          postgres    false    295            �           0    0    COLUMN otkl.station_id    COMMENT     M   COMMENT ON COLUMN public.otkl.station_id IS 'Станция/Перегон';
          public          postgres    false    295            �           0    0    COLUMN otkl.description    COMMENT     A   COMMENT ON COLUMN public.otkl.description IS 'Описание';
          public          postgres    false    295            �           0    0    COLUMN otkl.object    COMMENT     I   COMMENT ON COLUMN public.otkl.object IS 'Что отключается';
          public          postgres    false    295            �           0    0    COLUMN otkl.transfer_user_id    COMMENT     F   COMMENT ON COLUMN public.otkl.transfer_user_id IS 'Передано';
          public          postgres    false    295            �           0    0    COLUMN otkl.user_id    COMMENT     E   COMMENT ON COLUMN public.otkl.user_id IS 'Пользователь';
          public          postgres    false    295                        0    0    COLUMN otkl.organization_id    COMMENT     K   COMMENT ON COLUMN public.otkl.organization_id IS 'Предприятие';
          public          postgres    false    295            &           1259    26766    otkl_id_seq    SEQUENCE     �   CREATE SEQUENCE public.otkl_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.otkl_id_seq;
       public          postgres    false    295                       0    0    otkl_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.otkl_id_seq OWNED BY public.otkl.id;
          public          postgres    false    294            )           1259    26783    plan    TABLE     2  CREATE TABLE public.plan (
    id integer NOT NULL,
    putdate date NOT NULL,
    work character varying(255),
    station character varying(255),
    subdivision character varying(255),
    expired character varying(255),
    organization_id integer NOT NULL,
    work_plan integer DEFAULT 0 NOT NULL
);
    DROP TABLE public.plan;
       public         heap    postgres    false                       0    0    COLUMN plan.putdate    COMMENT     5   COMMENT ON COLUMN public.plan.putdate IS 'Дата';
          public          postgres    false    297                       0    0    COLUMN plan.work    COMMENT     ?   COMMENT ON COLUMN public.plan.work IS 'Шифр работы';
          public          postgres    false    297                       0    0    COLUMN plan.station    COMMENT     ;   COMMENT ON COLUMN public.plan.station IS 'Станция';
          public          postgres    false    297                       0    0    COLUMN plan.subdivision    COMMENT     ?   COMMENT ON COLUMN public.plan.subdivision IS 'Бригада';
          public          postgres    false    297                       0    0    COLUMN plan.expired    COMMENT     A   COMMENT ON COLUMN public.plan.expired IS 'Просрочено';
          public          postgres    false    297                       0    0    COLUMN plan.organization_id    COMMENT     K   COMMENT ON COLUMN public.plan.organization_id IS 'Предприятие';
          public          postgres    false    297                       0    0    COLUMN plan.work_plan    COMMENT     X   COMMENT ON COLUMN public.plan.work_plan IS 'Плановая трудоемкость';
          public          postgres    false    297            (           1259    26781    plan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.plan_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.plan_id_seq;
       public          postgres    false    297            	           0    0    plan_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.plan_id_seq OWNED BY public.plan.id;
          public          postgres    false    296            +           1259    26795    planer    TABLE     �   CREATE TABLE public.planer (
    id integer NOT NULL,
    putdate date NOT NULL,
    test character varying(255) NOT NULL,
    leader character varying(255) NOT NULL,
    date_create date NOT NULL
);
    DROP TABLE public.planer;
       public         heap    postgres    false            
           0    0    COLUMN planer.putdate    COMMENT     7   COMMENT ON COLUMN public.planer.putdate IS 'Дата';
          public          postgres    false    299                       0    0    COLUMN planer.test    COMMENT     @   COMMENT ON COLUMN public.planer.test IS 'Содержание';
          public          postgres    false    299                       0    0    COLUMN planer.leader    COMMENT     F   COMMENT ON COLUMN public.planer.leader IS 'Руководитель';
          public          postgres    false    299                       0    0    COLUMN planer.date_create    COMMENT     L   COMMENT ON COLUMN public.planer.date_create IS 'Дата создания';
          public          postgres    false    299            *           1259    26793    planer_id_seq    SEQUENCE     �   CREATE SEQUENCE public.planer_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.planer_id_seq;
       public          postgres    false    299                       0    0    planer_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.planer_id_seq OWNED BY public.planer.id;
          public          postgres    false    298            �            1259    26315    post    TABLE     �   CREATE TABLE public.post (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    short_title character varying(255) NOT NULL
);
    DROP TABLE public.post;
       public         heap    postgres    false                       0    0    COLUMN post.title    COMMENT     =   COMMENT ON COLUMN public.post.title IS 'Должность';
          public          postgres    false    210                       0    0    COLUMN post.short_title    COMMENT     9   COMMENT ON COLUMN public.post.short_title IS 'Шифр';
          public          postgres    false    210            �            1259    26313    post_id_seq    SEQUENCE     �   CREATE SEQUENCE public.post_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.post_id_seq;
       public          postgres    false    210                       0    0    post_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.post_id_seq OWNED BY public.post.id;
          public          postgres    false    209            1           1259    26825    rc    TABLE     �   CREATE TABLE public.rc (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    station_id integer NOT NULL
);
    DROP TABLE public.rc;
       public         heap    postgres    false                       0    0    COLUMN rc.title    COMMENT     D   COMMENT ON COLUMN public.rc.title IS 'Рельсовая цепь';
          public          postgres    false    305                       0    0    COLUMN rc.station_id    COMMENT     K   COMMENT ON COLUMN public.rc.station_id IS 'Станция/Перегон';
          public          postgres    false    305            0           1259    26823 	   rc_id_seq    SEQUENCE     �   CREATE SEQUENCE public.rc_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
     DROP SEQUENCE public.rc_id_seq;
       public          postgres    false    305                       0    0 	   rc_id_seq    SEQUENCE OWNED BY     7   ALTER SEQUENCE public.rc_id_seq OWNED BY public.rc.id;
          public          postgres    false    304            3           1259    26833    rework    TABLE     R  CREATE TABLE public.rework (
    id integer NOT NULL,
    putdate date NOT NULL,
    user_id integer NOT NULL,
    time_start time(0) without time zone NOT NULL,
    time_finish time(0) without time zone NOT NULL,
    sum double precision NOT NULL,
    description character varying(255) NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.rework;
       public         heap    postgres    false                       0    0    COLUMN rework.putdate    COMMENT     7   COMMENT ON COLUMN public.rework.putdate IS 'Дата';
          public          postgres    false    307                       0    0    COLUMN rework.user_id    COMMENT     A   COMMENT ON COLUMN public.rework.user_id IS 'Сотрудник';
          public          postgres    false    307                       0    0    COLUMN rework.time_start    COMMENT     A   COMMENT ON COLUMN public.rework.time_start IS 'Время (с)';
          public          postgres    false    307                       0    0    COLUMN rework.time_finish    COMMENT     D   COMMENT ON COLUMN public.rework.time_finish IS 'Время (по)';
          public          postgres    false    307                       0    0    COLUMN rework.sum    COMMENT     N   COMMENT ON COLUMN public.rework.sum IS 'Переработка (часов)';
          public          postgres    false    307                       0    0    COLUMN rework.description    COMMENT     G   COMMENT ON COLUMN public.rework.description IS 'Примечание';
          public          postgres    false    307                       0    0    COLUMN rework.organization_id    COMMENT     M   COMMENT ON COLUMN public.rework.organization_id IS 'Предприятие';
          public          postgres    false    307            2           1259    26831    rework_id_seq    SEQUENCE     �   CREATE SEQUENCE public.rework_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.rework_id_seq;
       public          postgres    false    307                       0    0    rework_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.rework_id_seq OWNED BY public.rework.id;
          public          postgres    false    306            5           1259    26841    sam    TABLE     �  CREATE TABLE public.sam (
    id integer NOT NULL,
    putdate date NOT NULL,
    time_start time(0) without time zone DEFAULT '00:00:00'::time without time zone NOT NULL,
    time_finish time(0) without time zone DEFAULT NULL::time without time zone,
    sam_from_id integer NOT NULL,
    subdivision_id integer NOT NULL,
    station_id integer NOT NULL,
    responsible_user_id integer,
    reason character varying(255) DEFAULT NULL::character varying,
    description character varying(255) DEFAULT NULL::character varying,
    status boolean DEFAULT false NOT NULL,
    user_id integer NOT NULL,
    title_object character varying(255) DEFAULT NULL::character varying,
    sam_category_id integer NOT NULL,
    level integer DEFAULT 0 NOT NULL,
    putdate_send date,
    time_send time(0) without time zone DEFAULT NULL::time without time zone,
    date_finish date,
    organization_id integer NOT NULL,
    putdate_term date
);
    DROP TABLE public.sam;
       public         heap    postgres    false                       0    0    COLUMN sam.putdate    COMMENT     G   COMMENT ON COLUMN public.sam.putdate IS 'Дата замечания';
          public          postgres    false    309                       0    0    COLUMN sam.time_start    COMMENT     F   COMMENT ON COLUMN public.sam.time_start IS 'Время начала';
          public          postgres    false    309                       0    0    COLUMN sam.time_finish    COMMENT     M   COMMENT ON COLUMN public.sam.time_finish IS 'Время окончания';
          public          postgres    false    309                        0    0    COLUMN sam.sam_from_id    COMMENT     C   COMMENT ON COLUMN public.sam.sam_from_id IS 'Кто сделал';
          public          postgres    false    309            !           0    0    COLUMN sam.subdivision_id    COMMENT     M   COMMENT ON COLUMN public.sam.subdivision_id IS 'Подразделение';
          public          postgres    false    309            "           0    0    COLUMN sam.station_id    COMMENT     L   COMMENT ON COLUMN public.sam.station_id IS 'Станция/Перегон';
          public          postgres    false    309            #           0    0    COLUMN sam.responsible_user_id    COMMENT     P   COMMENT ON COLUMN public.sam.responsible_user_id IS 'Отвественный';
          public          postgres    false    309            $           0    0    COLUMN sam.reason    COMMENT     9   COMMENT ON COLUMN public.sam.reason IS 'Причина';
          public          postgres    false    309            %           0    0    COLUMN sam.description    COMMENT     D   COMMENT ON COLUMN public.sam.description IS 'Примечание';
          public          postgres    false    309            &           0    0    COLUMN sam.status    COMMENT     =   COMMENT ON COLUMN public.sam.status IS 'Устранено';
          public          postgres    false    309            '           0    0    COLUMN sam.user_id    COMMENT     D   COMMENT ON COLUMN public.sam.user_id IS 'Пользователь';
          public          postgres    false    309            (           0    0    COLUMN sam.title_object    COMMENT     =   COMMENT ON COLUMN public.sam.title_object IS 'Объект';
          public          postgres    false    309            )           0    0    COLUMN sam.sam_category_id    COMMENT     a   COMMENT ON COLUMN public.sam.sam_category_id IS 'Категория неисправности';
          public          postgres    false    309            *           0    0    COLUMN sam.level    COMMENT     W   COMMENT ON COLUMN public.sam.level IS 'Категория неисправности';
          public          postgres    false    309            +           0    0    COLUMN sam.putdate_send    COMMENT     k   COMMENT ON COLUMN public.sam.putdate_send IS 'Дата сообщения электромеханику';
          public          postgres    false    309            ,           0    0    COLUMN sam.time_send    COMMENT     j   COMMENT ON COLUMN public.sam.time_send IS 'Время сообщения электромеханику';
          public          postgres    false    309            -           0    0    COLUMN sam.date_finish    COMMENT     M   COMMENT ON COLUMN public.sam.date_finish IS 'Дата завершения';
          public          postgres    false    309            .           0    0    COLUMN sam.organization_id    COMMENT     L   COMMENT ON COLUMN public.sam.organization_id IS 'Препдприятие';
          public          postgres    false    309            /           0    0    COLUMN sam.putdate_term    COMMENT     N   COMMENT ON COLUMN public.sam.putdate_term IS 'Срок устранения';
          public          postgres    false    309            7           1259    26860    sam_category    TABLE     i   CREATE TABLE public.sam_category (
    id integer NOT NULL,
    title character varying(255) NOT NULL
);
     DROP TABLE public.sam_category;
       public         heap    postgres    false            0           0    0    COLUMN sam_category.title    COMMENT     V   COMMENT ON COLUMN public.sam_category.title IS 'Название категории';
          public          postgres    false    311            6           1259    26858    sam_category_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sam_category_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.sam_category_id_seq;
       public          postgres    false    311            1           0    0    sam_category_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.sam_category_id_seq OWNED BY public.sam_category.id;
          public          postgres    false    310            9           1259    26868    sam_from    TABLE     e   CREATE TABLE public.sam_from (
    id integer NOT NULL,
    title character varying(255) NOT NULL
);
    DROP TABLE public.sam_from;
       public         heap    postgres    false            2           0    0    COLUMN sam_from.title    COMMENT     ?   COMMENT ON COLUMN public.sam_from.title IS 'Название';
          public          postgres    false    313            8           1259    26866    sam_from_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sam_from_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.sam_from_id_seq;
       public          postgres    false    313            3           0    0    sam_from_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.sam_from_id_seq OWNED BY public.sam_from.id;
          public          postgres    false    312            4           1259    26839 
   sam_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sam_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.sam_id_seq;
       public          postgres    false    309            4           0    0 
   sam_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE public.sam_id_seq OWNED BY public.sam.id;
          public          postgres    false    308            ;           1259    26876    service    TABLE     �   CREATE TABLE public.service (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.service;
       public         heap    postgres    false            5           0    0    COLUMN service.title    COMMENT     :   COMMENT ON COLUMN public.service.title IS 'Служба';
          public          postgres    false    315            6           0    0    COLUMN service.organization_id    COMMENT     N   COMMENT ON COLUMN public.service.organization_id IS 'Предприятие';
          public          postgres    false    315            :           1259    26874    service_id_seq    SEQUENCE     �   CREATE SEQUENCE public.service_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.service_id_seq;
       public          postgres    false    315            7           0    0    service_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.service_id_seq OWNED BY public.service.id;
          public          postgres    false    314            =           1259    26884    social_inspect    TABLE     �  CREATE TABLE public.social_inspect (
    id integer NOT NULL,
    date_find date NOT NULL,
    station_id integer NOT NULL,
    comment character varying(255) NOT NULL,
    service_id integer NOT NULL,
    user_id integer NOT NULL,
    who_give character varying(255) NOT NULL,
    date_last date NOT NULL,
    date_fix date,
    who_control character varying(255) DEFAULT NULL::character varying,
    organization_id integer NOT NULL
);
 "   DROP TABLE public.social_inspect;
       public         heap    postgres    false            8           0    0    COLUMN social_inspect.date_find    COMMENT     �   COMMENT ON COLUMN public.social_inspect.date_find IS 'Дата выявления предотказного состояния';
          public          postgres    false    317            9           0    0     COLUMN social_inspect.station_id    COMMENT     r   COMMENT ON COLUMN public.social_inspect.station_id IS 'Место предотказного состояния';
          public          postgres    false    317            :           0    0    COLUMN social_inspect.comment    COMMENT     u   COMMENT ON COLUMN public.social_inspect.comment IS 'Параметр предотказного состояния';
          public          postgres    false    317            ;           0    0     COLUMN social_inspect.service_id    COMMENT     i   COMMENT ON COLUMN public.social_inspect.service_id IS 'Отвественное предприятие';
          public          postgres    false    317            <           0    0    COLUMN social_inspect.user_id    COMMENT     S   COMMENT ON COLUMN public.social_inspect.user_id IS 'Выявил на месте';
          public          postgres    false    317            =           0    0    COLUMN social_inspect.who_give    COMMENT     J   COMMENT ON COLUMN public.social_inspect.who_give IS 'Предеанно';
          public          postgres    false    317            >           0    0    COLUMN social_inspect.date_last    COMMENT     P   COMMENT ON COLUMN public.social_inspect.date_last IS 'Устранить до';
          public          postgres    false    317            ?           0    0    COLUMN social_inspect.date_fix    COMMENT     U   COMMENT ON COLUMN public.social_inspect.date_fix IS 'Дата устранения';
          public          postgres    false    317            @           0    0 !   COLUMN social_inspect.who_control    COMMENT     y   COMMENT ON COLUMN public.social_inspect.who_control IS 'Контроль фактического устранения';
          public          postgres    false    317            A           0    0 %   COLUMN social_inspect.organization_id    COMMENT     U   COMMENT ON COLUMN public.social_inspect.organization_id IS 'Предприятие';
          public          postgres    false    317            <           1259    26882    social_inspect_id_seq    SEQUENCE     �   CREATE SEQUENCE public.social_inspect_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.social_inspect_id_seq;
       public          postgres    false    317            B           0    0    social_inspect_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.social_inspect_id_seq OWNED BY public.social_inspect.id;
          public          postgres    false    316            ?           1259    26896    spr_auto    TABLE     &  CREATE TABLE public.spr_auto (
    id integer NOT NULL,
    brand character varying(255) NOT NULL,
    number character varying(255) NOT NULL,
    organization_id integer NOT NULL,
    date_check date,
    ts_reestr integer NOT NULL,
    ts_class integer NOT NULL,
    fuel integer NOT NULL
);
    DROP TABLE public.spr_auto;
       public         heap    postgres    false            C           0    0    COLUMN spr_auto.brand    COMMENT     9   COMMENT ON COLUMN public.spr_auto.brand IS 'Марка';
          public          postgres    false    319            D           0    0    COLUMN spr_auto.number    COMMENT     B   COMMENT ON COLUMN public.spr_auto.number IS 'Гос. номер';
          public          postgres    false    319            E           0    0    COLUMN spr_auto.organization_id    COMMENT     O   COMMENT ON COLUMN public.spr_auto.organization_id IS 'Предприятие';
          public          postgres    false    319            F           0    0    COLUMN spr_auto.date_check    COMMENT     K   COMMENT ON COLUMN public.spr_auto.date_check IS 'Дата осмотра';
          public          postgres    false    319            G           0    0    COLUMN spr_auto.ts_reestr    COMMENT     T   COMMENT ON COLUMN public.spr_auto.ts_reestr IS 'ТИП ТС (по реестру)';
          public          postgres    false    319            H           0    0    COLUMN spr_auto.ts_class    COMMENT     _   COMMENT ON COLUMN public.spr_auto.ts_class IS 'Тип ТС по классификатору';
          public          postgres    false    319            I           0    0    COLUMN spr_auto.fuel    COMMENT     C   COMMENT ON COLUMN public.spr_auto.fuel IS 'Вид топлива';
          public          postgres    false    319            >           1259    26894    spr_auto_id_seq    SEQUENCE     �   CREATE SEQUENCE public.spr_auto_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.spr_auto_id_seq;
       public          postgres    false    319            J           0    0    spr_auto_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.spr_auto_id_seq OWNED BY public.spr_auto.id;
          public          postgres    false    318            A           1259    26907    spr_balance    TABLE     h   CREATE TABLE public.spr_balance (
    id integer NOT NULL,
    title character varying(255) NOT NULL
);
    DROP TABLE public.spr_balance;
       public         heap    postgres    false            K           0    0    COLUMN spr_balance.title    COMMENT     c   COMMENT ON COLUMN public.spr_balance.title IS 'Балансовая принадлежность';
          public          postgres    false    321            @           1259    26905    spr_balance_id_seq    SEQUENCE     �   CREATE SEQUENCE public.spr_balance_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.spr_balance_id_seq;
       public          postgres    false    321            L           0    0    spr_balance_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.spr_balance_id_seq OWNED BY public.spr_balance.id;
          public          postgres    false    320            K           1259    26956 	   spr_class    TABLE     d   CREATE TABLE public.spr_class (
    id integer NOT NULL,
    cur character varying(255) NOT NULL
);
    DROP TABLE public.spr_class;
       public         heap    postgres    false            M           0    0    COLUMN spr_class.cur    COMMENT     >   COMMENT ON COLUMN public.spr_class.cur IS 'Значение';
          public          postgres    false    331            J           1259    26954    spr_class_id_seq    SEQUENCE     �   CREATE SEQUENCE public.spr_class_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.spr_class_id_seq;
       public          postgres    false    331            N           0    0    spr_class_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.spr_class_id_seq OWNED BY public.spr_class.id;
          public          postgres    false    330            U           1259    26996 
   spr_driver    TABLE     Q   CREATE TABLE public.spr_driver (
    id integer NOT NULL,
    user_id integer
);
    DROP TABLE public.spr_driver;
       public         heap    postgres    false            O           0    0    COLUMN spr_driver.user_id    COMMENT     K   COMMENT ON COLUMN public.spr_driver.user_id IS 'Пользователь';
          public          postgres    false    341            T           1259    26994    spr_driver_id_seq    SEQUENCE     �   CREATE SEQUENCE public.spr_driver_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.spr_driver_id_seq;
       public          postgres    false    341            P           0    0    spr_driver_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.spr_driver_id_seq OWNED BY public.spr_driver.id;
          public          postgres    false    340            C           1259    26915    spr_electro    TABLE     �  CREATE TABLE public.spr_electro (
    id integer NOT NULL,
    subdivision_id integer NOT NULL,
    spr_electro_type_id integer NOT NULL,
    spr_electro_obj_id integer NOT NULL,
    fider_type integer DEFAULT 0 NOT NULL,
    place character varying(255) DEFAULT NULL::character varying,
    number character varying(255) NOT NULL,
    spr_electro_trans_id integer NOT NULL,
    organization_id integer NOT NULL,
    active boolean DEFAULT true NOT NULL
);
    DROP TABLE public.spr_electro;
       public         heap    postgres    false            Q           0    0 !   COLUMN spr_electro.subdivision_id    COMMENT     U   COMMENT ON COLUMN public.spr_electro.subdivision_id IS 'Подразделение';
          public          postgres    false    323            R           0    0 &   COLUMN spr_electro.spr_electro_type_id    COMMENT     W   COMMENT ON COLUMN public.spr_electro.spr_electro_type_id IS 'Тип счетчика';
          public          postgres    false    323            S           0    0 %   COLUMN spr_electro.spr_electro_obj_id    COMMENT     K   COMMENT ON COLUMN public.spr_electro.spr_electro_obj_id IS 'Объект';
          public          postgres    false    323            T           0    0    COLUMN spr_electro.fider_type    COMMENT     A   COMMENT ON COLUMN public.spr_electro.fider_type IS 'Фидер';
          public          postgres    false    323            U           0    0    COLUMN spr_electro.place    COMMENT     <   COMMENT ON COLUMN public.spr_electro.place IS 'Место';
          public          postgres    false    323            V           0    0    COLUMN spr_electro.number    COMMENT     =   COMMENT ON COLUMN public.spr_electro.number IS 'Номер';
          public          postgres    false    323            W           0    0 '   COLUMN spr_electro.spr_electro_trans_id    COMMENT     [   COMMENT ON COLUMN public.spr_electro.spr_electro_trans_id IS 'Трансформатор';
          public          postgres    false    323            X           0    0 "   COLUMN spr_electro.organization_id    COMMENT     R   COMMENT ON COLUMN public.spr_electro.organization_id IS 'Предприятие';
          public          postgres    false    323            Y           0    0    COLUMN spr_electro.active    COMMENT     C   COMMENT ON COLUMN public.spr_electro.active IS 'Работает';
          public          postgres    false    323            B           1259    26913    spr_electro_id_seq    SEQUENCE     �   CREATE SEQUENCE public.spr_electro_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.spr_electro_id_seq;
       public          postgres    false    323            Z           0    0    spr_electro_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.spr_electro_id_seq OWNED BY public.spr_electro.id;
          public          postgres    false    322            E           1259    26929    spr_electro_obj    TABLE     �   CREATE TABLE public.spr_electro_obj (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    organization_id integer NOT NULL
);
 #   DROP TABLE public.spr_electro_obj;
       public         heap    postgres    false            [           0    0    COLUMN spr_electro_obj.title    COMMENT     B   COMMENT ON COLUMN public.spr_electro_obj.title IS 'Объект';
          public          postgres    false    325            \           0    0 &   COLUMN spr_electro_obj.organization_id    COMMENT     V   COMMENT ON COLUMN public.spr_electro_obj.organization_id IS 'Предприятие';
          public          postgres    false    325            D           1259    26927    spr_electro_obj_id_seq    SEQUENCE     �   CREATE SEQUENCE public.spr_electro_obj_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.spr_electro_obj_id_seq;
       public          postgres    false    325            ]           0    0    spr_electro_obj_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.spr_electro_obj_id_seq OWNED BY public.spr_electro_obj.id;
          public          postgres    false    324            G           1259    26937    spr_electro_trans    TABLE     �   CREATE TABLE public.spr_electro_trans (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    k_tr character varying(255) NOT NULL
);
 %   DROP TABLE public.spr_electro_trans;
       public         heap    postgres    false            ^           0    0    COLUMN spr_electro_trans.title    COMMENT     H   COMMENT ON COLUMN public.spr_electro_trans.title IS 'Название';
          public          postgres    false    327            _           0    0    COLUMN spr_electro_trans.k_tr    COMMENT     L   COMMENT ON COLUMN public.spr_electro_trans.k_tr IS 'Коэф. транс.';
          public          postgres    false    327            F           1259    26935    spr_electro_trans_id_seq    SEQUENCE     �   CREATE SEQUENCE public.spr_electro_trans_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.spr_electro_trans_id_seq;
       public          postgres    false    327            `           0    0    spr_electro_trans_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.spr_electro_trans_id_seq OWNED BY public.spr_electro_trans.id;
          public          postgres    false    326            I           1259    26948    spr_electro_type    TABLE     m   CREATE TABLE public.spr_electro_type (
    id integer NOT NULL,
    title character varying(255) NOT NULL
);
 $   DROP TABLE public.spr_electro_type;
       public         heap    postgres    false            a           0    0    COLUMN spr_electro_type.title    COMMENT     N   COMMENT ON COLUMN public.spr_electro_type.title IS 'Тип счетчика';
          public          postgres    false    329            H           1259    26946    spr_electro_type_id_seq    SEQUENCE     �   CREATE SEQUENCE public.spr_electro_type_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.spr_electro_type_id_seq;
       public          postgres    false    329            b           0    0    spr_electro_type_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.spr_electro_type_id_seq OWNED BY public.spr_electro_type.id;
          public          postgres    false    328            M           1259    26964    spr_siz    TABLE     �   CREATE TABLE public.spr_siz (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    "time" integer NOT NULL
);
    DROP TABLE public.spr_siz;
       public         heap    postgres    false            c           0    0    COLUMN spr_siz.title    COMMENT     M   COMMENT ON COLUMN public.spr_siz.title IS 'Наименование СИЗ';
          public          postgres    false    333            d           0    0    COLUMN spr_siz."time"    COMMENT     e   COMMENT ON COLUMN public.spr_siz."time" IS 'Периодичность испытания (мес)';
          public          postgres    false    333            L           1259    26962    spr_siz_id_seq    SEQUENCE     �   CREATE SEQUENCE public.spr_siz_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.spr_siz_id_seq;
       public          postgres    false    333            e           0    0    spr_siz_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.spr_siz_id_seq OWNED BY public.spr_siz.id;
          public          postgres    false    332            O           1259    26972    spr_spt    TABLE       CREATE TABLE public.spr_spt (
    id integer NOT NULL,
    station_id integer NOT NULL,
    object character varying(255) NOT NULL,
    spr_spt_system_id integer NOT NULL,
    spr_spt_type_id integer NOT NULL,
    spr_balance_id integer NOT NULL,
    spr_class_id integer NOT NULL
);
    DROP TABLE public.spr_spt;
       public         heap    postgres    false            f           0    0    COLUMN spr_spt.station_id    COMMENT     P   COMMENT ON COLUMN public.spr_spt.station_id IS 'Станция/Перегон';
          public          postgres    false    335            g           0    0    COLUMN spr_spt.object    COMMENT     ;   COMMENT ON COLUMN public.spr_spt.object IS 'Объект';
          public          postgres    false    335            h           0    0     COLUMN spr_spt.spr_spt_system_id    COMMENT     @   COMMENT ON COLUMN public.spr_spt.spr_spt_system_id IS 'Вид';
          public          postgres    false    335            i           0    0    COLUMN spr_spt.spr_spt_type_id    COMMENT     >   COMMENT ON COLUMN public.spr_spt.spr_spt_type_id IS 'Тип';
          public          postgres    false    335            j           0    0    COLUMN spr_spt.spr_balance_id    COMMENT     h   COMMENT ON COLUMN public.spr_spt.spr_balance_id IS 'Балансовая принадлежность';
          public          postgres    false    335            k           0    0    COLUMN spr_spt.spr_class_id    COMMENT     ?   COMMENT ON COLUMN public.spr_spt.spr_class_id IS 'Класс';
          public          postgres    false    335            N           1259    26970    spr_spt_id_seq    SEQUENCE     �   CREATE SEQUENCE public.spr_spt_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.spr_spt_id_seq;
       public          postgres    false    335            l           0    0    spr_spt_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.spr_spt_id_seq OWNED BY public.spr_spt.id;
          public          postgres    false    334            Q           1259    26980    spr_spt_system    TABLE     b   CREATE TABLE public.spr_spt_system (
    id integer NOT NULL,
    title character varying(255)
);
 "   DROP TABLE public.spr_spt_system;
       public         heap    postgres    false            m           0    0    COLUMN spr_spt_system.title    COMMENT     M   COMMENT ON COLUMN public.spr_spt_system.title IS 'Наименование';
          public          postgres    false    337            P           1259    26978    spr_spt_system_id_seq    SEQUENCE     �   CREATE SEQUENCE public.spr_spt_system_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.spr_spt_system_id_seq;
       public          postgres    false    337            n           0    0    spr_spt_system_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.spr_spt_system_id_seq OWNED BY public.spr_spt_system.id;
          public          postgres    false    336            S           1259    26988    spr_spt_type    TABLE     `   CREATE TABLE public.spr_spt_type (
    id integer NOT NULL,
    title character varying(255)
);
     DROP TABLE public.spr_spt_type;
       public         heap    postgres    false            o           0    0    COLUMN spr_spt_type.title    COMMENT     9   COMMENT ON COLUMN public.spr_spt_type.title IS 'Тип';
          public          postgres    false    339            R           1259    26986    spr_spt_type_id_seq    SEQUENCE     �   CREATE SEQUENCE public.spr_spt_type_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.spr_spt_type_id_seq;
       public          postgres    false    339            p           0    0    spr_spt_type_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.spr_spt_type_id_seq OWNED BY public.spr_spt_type.id;
          public          postgres    false    338            �            1259    26345    station    TABLE     �   CREATE TABLE public.station (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    subdivision_id integer NOT NULL,
    dga_id integer NOT NULL,
    "stType" boolean NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.station;
       public         heap    postgres    false            q           0    0    COLUMN station.title    COMMENT     <   COMMENT ON COLUMN public.station.title IS 'Станция';
          public          postgres    false    216            r           0    0    COLUMN station.subdivision_id    COMMENT     Q   COMMENT ON COLUMN public.station.subdivision_id IS 'Подразделение';
          public          postgres    false    216            s           0    0    COLUMN station.dga_id    COMMENT     5   COMMENT ON COLUMN public.station.dga_id IS 'ДГА';
          public          postgres    false    216            t           0    0    COLUMN station."stType"    COMMENT     N   COMMENT ON COLUMN public.station."stType" IS 'Станция/Перегон';
          public          postgres    false    216            u           0    0    COLUMN station.organization_id    COMMENT     N   COMMENT ON COLUMN public.station.organization_id IS 'Предприятие';
          public          postgres    false    216            �            1259    26343    station_id_seq    SEQUENCE     �   CREATE SEQUENCE public.station_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.station_id_seq;
       public          postgres    false    216            v           0    0    station_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.station_id_seq OWNED BY public.station.id;
          public          postgres    false    215            �            1259    26351    station_subdivision    TABLE     r   CREATE TABLE public.station_subdivision (
    station_id integer NOT NULL,
    subdivision_id integer NOT NULL
);
 '   DROP TABLE public.station_subdivision;
       public         heap    postgres    false            w           0    0 %   COLUMN station_subdivision.station_id    COMMENT     M   COMMENT ON COLUMN public.station_subdivision.station_id IS 'Станция';
          public          postgres    false    217            x           0    0 )   COLUMN station_subdivision.subdivision_id    COMMENT     ]   COMMENT ON COLUMN public.station_subdivision.subdivision_id IS 'Подразделение';
          public          postgres    false    217            �            1259    26337    status    TABLE     c   CREATE TABLE public.status (
    id integer NOT NULL,
    title character varying(255) NOT NULL
);
    DROP TABLE public.status;
       public         heap    postgres    false            y           0    0    COLUMN status.title    COMMENT     ?   COMMENT ON COLUMN public.status.title IS 'Состояние';
          public          postgres    false    214            �            1259    26335    status_id_seq    SEQUENCE     �   CREATE SEQUENCE public.status_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.status_id_seq;
       public          postgres    false    214            z           0    0    status_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.status_id_seq OWNED BY public.status.id;
          public          postgres    false    213            �            1259    26304    subdivision    TABLE       CREATE TABLE public.subdivision (
    id integer NOT NULL,
    organization_id integer NOT NULL,
    title character varying(255) NOT NULL,
    user_id integer,
    briefing boolean NOT NULL,
    ekasui_title character varying(255) NOT NULL,
    code_asui character varying(255)
);
    DROP TABLE public.subdivision;
       public         heap    postgres    false            {           0    0 "   COLUMN subdivision.organization_id    COMMENT     R   COMMENT ON COLUMN public.subdivision.organization_id IS 'Предприятие';
          public          postgres    false    208            |           0    0    COLUMN subdivision.title    COMMENT     e   COMMENT ON COLUMN public.subdivision.title IS 'Наименование подразделения';
          public          postgres    false    208            }           0    0    COLUMN subdivision.user_id    COMMENT     a   COMMENT ON COLUMN public.subdivision.user_id IS 'Начальник подразделения';
          public          postgres    false    208            ~           0    0    COLUMN subdivision.briefing    COMMENT     I   COMMENT ON COLUMN public.subdivision.briefing IS 'Инструктаж';
          public          postgres    false    208                       0    0    COLUMN subdivision.ekasui_title    COMMENT     _   COMMENT ON COLUMN public.subdivision.ekasui_title IS 'Обозначение в ЕКАСУИ';
          public          postgres    false    208            �           0    0    COLUMN subdivision.code_asui    COMMENT     I   COMMENT ON COLUMN public.subdivision.code_asui IS 'Код ЕКАСУИ';
          public          postgres    false    208            �            1259    26302    subdivision_id_seq    SEQUENCE     �   CREATE SEQUENCE public.subdivision_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.subdivision_id_seq;
       public          postgres    false    208            �           0    0    subdivision_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.subdivision_id_seq OWNED BY public.subdivision.id;
          public          postgres    false    207            �            1259    26274    user    TABLE     �  CREATE TABLE public."user" (
    id integer NOT NULL,
    username character varying(255) NOT NULL,
    auth_key character varying(32) NOT NULL,
    password_hash character varying(255) NOT NULL,
    password_reset_token character varying(255),
    email character varying(255) NOT NULL,
    status smallint DEFAULT 10 NOT NULL,
    created_at integer NOT NULL,
    updated_at integer NOT NULL,
    is_admin boolean DEFAULT false NOT NULL,
    subdivision_id integer,
    organization_id integer,
    name character varying(64) NOT NULL,
    post_id integer,
    description character varying(256) DEFAULT NULL::character varying,
    phone integer,
    reinstruction boolean,
    verification_token character varying(255) DEFAULT NULL::character varying
);
    DROP TABLE public."user";
       public         heap    postgres    false            �            1259    26272    user_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.user_id_seq;
       public          postgres    false    204            �           0    0    user_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.user_id_seq OWNED BY public."user".id;
          public          postgres    false    203            �            1259    26407    warning    TABLE     &  CREATE TABLE public.warning (
    id integer NOT NULL,
    station_id integer NOT NULL,
    place character varying(255) NOT NULL,
    description character varying(255) NOT NULL,
    date_work date NOT NULL,
    time_from time(0) without time zone NOT NULL,
    time_to time(0) without time zone NOT NULL,
    date_arm date,
    user_id integer NOT NULL,
    time_arm time(0) without time zone NOT NULL,
    arm_user_id integer,
    organization_id integer NOT NULL,
    pub_date timestamp(0) without time zone,
    number character varying(255)
);
    DROP TABLE public.warning;
       public         heap    postgres    false            �           0    0    COLUMN warning.station_id    COMMENT     P   COMMENT ON COLUMN public.warning.station_id IS 'Станция/перегон';
          public          postgres    false    229            �           0    0    COLUMN warning.place    COMMENT     ^   COMMENT ON COLUMN public.warning.place IS 'Место работ (№ пути, км, пк)';
          public          postgres    false    229            �           0    0    COLUMN warning.description    COMMENT     D   COMMENT ON COLUMN public.warning.description IS 'Описание';
          public          postgres    false    229            �           0    0    COLUMN warning.date_work    COMMENT     Z   COMMENT ON COLUMN public.warning.date_work IS 'Дата выполнения работ';
          public          postgres    false    229            �           0    0    COLUMN warning.time_from    COMMENT     H   COMMENT ON COLUMN public.warning.time_from IS 'Время с (мск)';
          public          postgres    false    229            �           0    0    COLUMN warning.time_to    COMMENT     H   COMMENT ON COLUMN public.warning.time_to IS 'Время по (мск)';
          public          postgres    false    229            �           0    0    COLUMN warning.date_arm    COMMENT     N   COMMENT ON COLUMN public.warning.date_arm IS 'Внесено в АРМ ЛП';
          public          postgres    false    229            �           0    0    COLUMN warning.user_id    COMMENT     H   COMMENT ON COLUMN public.warning.user_id IS 'Пользователь';
          public          postgres    false    229            �           0    0    COLUMN warning.time_arm    COMMENT     U   COMMENT ON COLUMN public.warning.time_arm IS 'Время внесения (мск)';
          public          postgres    false    229            �           0    0    COLUMN warning.arm_user_id    COMMENT     Q   COMMENT ON COLUMN public.warning.arm_user_id IS 'Передал в АРМ ЛП';
          public          postgres    false    229            �           0    0    COLUMN warning.organization_id    COMMENT     N   COMMENT ON COLUMN public.warning.organization_id IS 'Предприятие';
          public          postgres    false    229            �           0    0    COLUMN warning.pub_date    COMMENT     J   COMMENT ON COLUMN public.warning.pub_date IS 'Дата создания';
          public          postgres    false    229            �           0    0    COLUMN warning.number    COMMENT     E   COMMENT ON COLUMN public.warning.number IS 'Номер пр-ния';
          public          postgres    false    229            �            1259    26405    warning_id_seq    SEQUENCE     �   CREATE SEQUENCE public.warning_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.warning_id_seq;
       public          postgres    false    229            �           0    0    warning_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.warning_id_seq OWNED BY public.warning.id;
          public          postgres    false    228            �            1259    26385    window    TABLE     �  CREATE TABLE public."window" (
    id integer NOT NULL,
    putdate date NOT NULL,
    organization character varying(255) NOT NULL,
    work character varying(255) NOT NULL,
    place character varying(255) NOT NULL,
    plan character varying(255),
    hozed character varying(255),
    leader character varying(255),
    spec character varying(255),
    description character varying(255),
    transfer_user_id integer,
    user_id integer NOT NULL
);
    DROP TABLE public."window";
       public         heap    postgres    false            �           0    0    COLUMN "window".putdate    COMMENT     9   COMMENT ON COLUMN public."window".putdate IS 'Дата';
          public          postgres    false    225            �           0    0    COLUMN "window".organization    COMMENT     L   COMMENT ON COLUMN public."window".organization IS 'Предприятие';
          public          postgres    false    225            �           0    0    COLUMN "window".work    COMMENT     :   COMMENT ON COLUMN public."window".work IS 'Работа';
          public          postgres    false    225            �           0    0    COLUMN "window".place    COMMENT     9   COMMENT ON COLUMN public."window".place IS 'Место';
          public          postgres    false    225            �           0    0    COLUMN "window".plan    COMMENT     B   COMMENT ON COLUMN public."window".plan IS 'План. время';
          public          postgres    false    225            �           0    0    COLUMN "window".hozed    COMMENT     ;   COMMENT ON COLUMN public."window".hozed IS 'Хоз. ед';
          public          postgres    false    225            �           0    0    COLUMN "window".leader    COMMENT     H   COMMENT ON COLUMN public."window".leader IS 'Руководитель';
          public          postgres    false    225            �           0    0    COLUMN "window".spec    COMMENT     O   COMMENT ON COLUMN public."window".spec IS 'Особые требования';
          public          postgres    false    225            �           0    0    COLUMN "window".description    COMMENT     I   COMMENT ON COLUMN public."window".description IS 'Примечание';
          public          postgres    false    225            �           0    0     COLUMN "window".transfer_user_id    COMMENT     J   COMMENT ON COLUMN public."window".transfer_user_id IS 'Передано';
          public          postgres    false    225            �           0    0    COLUMN "window".user_id    COMMENT     I   COMMENT ON COLUMN public."window".user_id IS 'Пользователь';
          public          postgres    false    225            �            1259    26383    window_id_seq    SEQUENCE     �   CREATE SEQUENCE public.window_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.window_id_seq;
       public          postgres    false    225            �           0    0    window_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.window_id_seq OWNED BY public."window".id;
          public          postgres    false    224            �            1259    26396    windowapplication    TABLE     |  CREATE TABLE public.windowapplication (
    id integer NOT NULL,
    dnc character varying(255),
    date timestamp(0) without time zone NOT NULL,
    station_id integer NOT NULL,
    type character varying(255) NOT NULL,
    way integer NOT NULL,
    km integer NOT NULL,
    picket integer NOT NULL,
    shutdown boolean NOT NULL,
    fio_main character varying(255) NOT NULL,
    fio_bd character varying(255) NOT NULL,
    representative boolean NOT NULL,
    sign boolean NOT NULL,
    shutdown_voltage boolean NOT NULL,
    description character varying(255),
    fio_shchd character varying(255),
    written boolean NOT NULL
);
 %   DROP TABLE public.windowapplication;
       public         heap    postgres    false            �           0    0    COLUMN windowapplication.dnc    COMMENT     <   COMMENT ON COLUMN public.windowapplication.dnc IS 'ДНЦ';
          public          postgres    false    227            �           0    0    COLUMN windowapplication.date    COMMENT     M   COMMENT ON COLUMN public.windowapplication.date IS 'Дата и время';
          public          postgres    false    227            �           0    0 #   COLUMN windowapplication.station_id    COMMENT     Z   COMMENT ON COLUMN public.windowapplication.station_id IS 'Станция/Перегон';
          public          postgres    false    227            �           0    0    COLUMN windowapplication.type    COMMENT     C   COMMENT ON COLUMN public.windowapplication.type IS 'Работа';
          public          postgres    false    227            �           0    0    COLUMN windowapplication.way    COMMENT     >   COMMENT ON COLUMN public.windowapplication.way IS 'Путь';
          public          postgres    false    227            �           0    0    COLUMN windowapplication.km    COMMENT     E   COMMENT ON COLUMN public.windowapplication.km IS 'Километр';
          public          postgres    false    227            �           0    0    COLUMN windowapplication.picket    COMMENT     C   COMMENT ON COLUMN public.windowapplication.picket IS 'Пикет';
          public          postgres    false    227            �           0    0 !   COLUMN windowapplication.shutdown    COMMENT     b   COMMENT ON COLUMN public.windowapplication.shutdown IS 'Выключение устройств';
          public          postgres    false    227            �           0    0 !   COLUMN windowapplication.fio_main    COMMENT     e   COMMENT ON COLUMN public.windowapplication.fio_main IS 'ФИО руководителя работ';
          public          postgres    false    227            �           0    0    COLUMN windowapplication.fio_bd    COMMENT     d   COMMENT ON COLUMN public.windowapplication.fio_bd IS 'ФИО отвественного за БД';
          public          postgres    false    227            �           0    0 '   COLUMN windowapplication.representative    COMMENT     s   COMMENT ON COLUMN public.windowapplication.representative IS 'Требуется ли представитель';
          public          postgres    false    227            �           0    0    COLUMN windowapplication.sign    COMMENT     T   COMMENT ON COLUMN public.windowapplication.sign IS 'С окном|Без окна';
          public          postgres    false    227            �           0    0 )   COLUMN windowapplication.shutdown_voltage    COMMENT     d   COMMENT ON COLUMN public.windowapplication.shutdown_voltage IS 'Снятие напряжения';
          public          postgres    false    227            �           0    0 $   COLUMN windowapplication.description    COMMENT     R   COMMENT ON COLUMN public.windowapplication.description IS 'Примечание';
          public          postgres    false    227            �           0    0 "   COLUMN windowapplication.fio_shchd    COMMENT     I   COMMENT ON COLUMN public.windowapplication.fio_shchd IS 'ФИО ШЧД';
          public          postgres    false    227            �           0    0     COLUMN windowapplication.written    COMMENT     H   COMMENT ON COLUMN public.windowapplication.written IS 'Записан';
          public          postgres    false    227            �            1259    26394    windowapplication_id_seq    SEQUENCE     �   CREATE SEQUENCE public.windowapplication_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.windowapplication_id_seq;
       public          postgres    false    227            �           0    0    windowapplication_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.windowapplication_id_seq OWNED BY public.windowapplication.id;
          public          postgres    false    226            �            1259    26374    work    TABLE     r  CREATE TABLE public.work (
    id integer NOT NULL,
    code character varying(255) NOT NULL,
    doc character varying(255) NOT NULL,
    tkarta character varying(255) NOT NULL,
    text character varying(255) NOT NULL,
    period character varying(255) NOT NULL,
    type character varying(255),
    category smallint NOT NULL,
    organization_id integer NOT NULL
);
    DROP TABLE public.work;
       public         heap    postgres    false            �           0    0    COLUMN work.code    COMMENT     2   COMMENT ON COLUMN public.work.code IS 'Шифр';
          public          postgres    false    223            �           0    0    COLUMN work.doc    COMMENT     =   COMMENT ON COLUMN public.work.doc IS 'Инструкция';
          public          postgres    false    223            �           0    0    COLUMN work.tkarta    COMMENT     C   COMMENT ON COLUMN public.work.tkarta IS 'Раздел/Пункт';
          public          postgres    false    223            �           0    0    COLUMN work.text    COMMENT     M   COMMENT ON COLUMN public.work.text IS 'Наименование работ';
          public          postgres    false    223            �           0    0    COLUMN work.period    COMMENT     8   COMMENT ON COLUMN public.work.period IS 'Период';
          public          postgres    false    223            �           0    0    COLUMN work.type    COMMENT     0   COMMENT ON COLUMN public.work.type IS 'Вид';
          public          postgres    false    223            �           0    0    COLUMN work.category    COMMENT     @   COMMENT ON COLUMN public.work.category IS 'Категория';
          public          postgres    false    223            �           0    0    COLUMN work.organization_id    COMMENT     K   COMMENT ON COLUMN public.work.organization_id IS 'Предприятие';
          public          postgres    false    223            �            1259    26372    work_id_seq    SEQUENCE     �   CREATE SEQUENCE public.work_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.work_id_seq;
       public          postgres    false    223            �           0    0    work_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.work_id_seq OWNED BY public.work.id;
          public          postgres    false    222            ]           2604    26429    auto_list id    DEFAULT     l   ALTER TABLE ONLY public.auto_list ALTER COLUMN id SET DEFAULT nextval('public.auto_list_id_seq'::regclass);
 ;   ALTER TABLE public.auto_list ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    233    232    233            ^           2604    26437    auto_service id    DEFAULT     r   ALTER TABLE ONLY public.auto_service ALTER COLUMN id SET DEFAULT nextval('public.auto_service_id_seq'::regclass);
 >   ALTER TABLE public.auto_service ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    235    234    235            \           2604    26421    autotransport id    DEFAULT     t   ALTER TABLE ONLY public.autotransport ALTER COLUMN id SET DEFAULT nextval('public.autotransport_id_seq'::regclass);
 ?   ALTER TABLE public.autotransport ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    230    231    231            _           2604    26445    briefing id    DEFAULT     j   ALTER TABLE ONLY public.briefing ALTER COLUMN id SET DEFAULT nextval('public.briefing_id_seq'::regclass);
 :   ALTER TABLE public.briefing ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    237    236    237            �           2604    26608    card id    DEFAULT     b   ALTER TABLE ONLY public.card ALTER COLUMN id SET DEFAULT nextval('public.card_id_seq'::regclass);
 6   ALTER TABLE public.card ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    265    264    265            b           2604    26455    category id    DEFAULT     j   ALTER TABLE ONLY public.category ALTER COLUMN id SET DEFAULT nextval('public.category_id_seq'::regclass);
 :   ALTER TABLE public.category ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    238    239    239            d           2604    26464 
   contact id    DEFAULT     h   ALTER TABLE ONLY public.contact ALTER COLUMN id SET DEFAULT nextval('public.contact_id_seq'::regclass);
 9   ALTER TABLE public.contact ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    240    241    241            �           2604    26809    contractor id    DEFAULT     n   ALTER TABLE ONLY public.contractor ALTER COLUMN id SET DEFAULT nextval('public.contractor_id_seq'::regclass);
 <   ALTER TABLE public.contractor ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    301    300    301            �           2604    26817    contractor_reestr id    DEFAULT     |   ALTER TABLE ONLY public.contractor_reestr ALTER COLUMN id SET DEFAULT nextval('public.contractor_reestr_id_seq'::regclass);
 C   ALTER TABLE public.contractor_reestr ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    302    303    303            W           2604    26369    dga id    DEFAULT     `   ALTER TABLE ONLY public.dga ALTER COLUMN id SET DEFAULT nextval('public.dga_id_seq'::regclass);
 5   ALTER TABLE public.dga ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    221    221            V           2604    26361    dga_list id    DEFAULT     j   ALTER TABLE ONLY public.dga_list ALTER COLUMN id SET DEFAULT nextval('public.dga_list_id_seq'::regclass);
 :   ALTER TABLE public.dga_list ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    219    219            f           2604    26476    document id    DEFAULT     j   ALTER TABLE ONLY public.document ALTER COLUMN id SET DEFAULT nextval('public.document_id_seq'::regclass);
 :   ALTER TABLE public.document ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    243    242    243            i           2604    26489    fail id    DEFAULT     b   ALTER TABLE ONLY public.fail ALTER COLUMN id SET DEFAULT nextval('public.fail_id_seq'::regclass);
 6   ALTER TABLE public.fail ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    244    245    245            �           2604    27007    fail_user id    DEFAULT     l   ALTER TABLE ONLY public.fail_user ALTER COLUMN id SET DEFAULT nextval('public.fail_user_id_seq'::regclass);
 ;   ALTER TABLE public.fail_user ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    342    343    343            m           2604    26503    incoming id    DEFAULT     j   ALTER TABLE ONLY public.incoming ALTER COLUMN id SET DEFAULT nextval('public.incoming_id_seq'::regclass);
 :   ALTER TABLE public.incoming ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    246    247    247            o           2604    26515    incoming_sam id    DEFAULT     r   ALTER TABLE ONLY public.incoming_sam ALTER COLUMN id SET DEFAULT nextval('public.incoming_sam_id_seq'::regclass);
 >   ALTER TABLE public.incoming_sam ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    249    248    249            q           2604    26524    journal_electro id    DEFAULT     x   ALTER TABLE ONLY public.journal_electro ALTER COLUMN id SET DEFAULT nextval('public.journal_electro_id_seq'::regclass);
 A   ALTER TABLE public.journal_electro ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    251    250    251            r           2604    26532    journal_izol id    DEFAULT     r   ALTER TABLE ONLY public.journal_izol ALTER COLUMN id SET DEFAULT nextval('public.journal_izol_id_seq'::regclass);
 >   ALTER TABLE public.journal_izol ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    253    252    253            v           2604    26546    journal_izol_control id    DEFAULT     �   ALTER TABLE ONLY public.journal_izol_control ALTER COLUMN id SET DEFAULT nextval('public.journal_izol_control_id_seq'::regclass);
 F   ALTER TABLE public.journal_izol_control ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    254    255    255            x           2604    26555    journal_revision_ot id    DEFAULT     �   ALTER TABLE ONLY public.journal_revision_ot ALTER COLUMN id SET DEFAULT nextval('public.journal_revision_ot_id_seq'::regclass);
 E   ALTER TABLE public.journal_revision_ot ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    257    256    257            }           2604    26567    journal_revision_ot_file id    DEFAULT     �   ALTER TABLE ONLY public.journal_revision_ot_file ALTER COLUMN id SET DEFAULT nextval('public.journal_revision_ot_file_id_seq'::regclass);
 J   ALTER TABLE public.journal_revision_ot_file ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    259    258    259                       2604    26579    journal_siz id    DEFAULT     p   ALTER TABLE ONLY public.journal_siz ALTER COLUMN id SET DEFAULT nextval('public.journal_siz_id_seq'::regclass);
 =   ALTER TABLE public.journal_siz ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    260    261    261            �           2604    26590    journal_spt id    DEFAULT     p   ALTER TABLE ONLY public.journal_spt ALTER COLUMN id SET DEFAULT nextval('public.journal_spt_id_seq'::regclass);
 =   ALTER TABLE public.journal_spt ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    263    262    263            �           2604    26616 	   kasant id    DEFAULT     f   ALTER TABLE ONLY public.kasant ALTER COLUMN id SET DEFAULT nextval('public.kasant_id_seq'::regclass);
 8   ALTER TABLE public.kasant ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    267    266    267            �           2604    26629    kip id    DEFAULT     `   ALTER TABLE ONLY public.kip ALTER COLUMN id SET DEFAULT nextval('public.kip_id_seq'::regclass);
 5   ALTER TABLE public.kip ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    268    269    269            �           2604    26641    kip_device id    DEFAULT     n   ALTER TABLE ONLY public.kip_device ALTER COLUMN id SET DEFAULT nextval('public.kip_device_id_seq'::regclass);
 <   ALTER TABLE public.kip_device ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    270    271    271            �           2604    26652    ksotp_category id    DEFAULT     v   ALTER TABLE ONLY public.ksotp_category ALTER COLUMN id SET DEFAULT nextval('public.ksotp_category_id_seq'::regclass);
 @   ALTER TABLE public.ksotp_category ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    273    272    273            S           2604    26329    movement id    DEFAULT     j   ALTER TABLE ONLY public.movement ALTER COLUMN id SET DEFAULT nextval('public.movement_id_seq'::regclass);
 :   ALTER TABLE public.movement ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    211    212    212            �           2604    26664    msu id    DEFAULT     `   ALTER TABLE ONLY public.msu ALTER COLUMN id SET DEFAULT nextval('public.msu_id_seq'::regclass);
 5   ALTER TABLE public.msu ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    275    274    275            �           2604    27015    news id    DEFAULT     b   ALTER TABLE ONLY public.news ALTER COLUMN id SET DEFAULT nextval('public.news_id_seq'::regclass);
 6   ALTER TABLE public.news ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    345    344    345            �           2604    26673 	   notice id    DEFAULT     f   ALTER TABLE ONLY public.notice ALTER COLUMN id SET DEFAULT nextval('public.notice_id_seq'::regclass);
 8   ALTER TABLE public.notice ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    277    276    277            �           2604    26681    oper_rasp id    DEFAULT     l   ALTER TABLE ONLY public.oper_rasp ALTER COLUMN id SET DEFAULT nextval('public.oper_rasp_id_seq'::regclass);
 ;   ALTER TABLE public.oper_rasp ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    279    278    279            �           2604    26690    oper_rasp_file id    DEFAULT     v   ALTER TABLE ONLY public.oper_rasp_file ALTER COLUMN id SET DEFAULT nextval('public.oper_rasp_file_id_seq'::regclass);
 @   ALTER TABLE public.oper_rasp_file ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    280    281    281            �           2604    26698    oper_rasp_isp id    DEFAULT     t   ALTER TABLE ONLY public.oper_rasp_isp ALTER COLUMN id SET DEFAULT nextval('public.oper_rasp_isp_id_seq'::regclass);
 ?   ALTER TABLE public.oper_rasp_isp ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    282    283    283            �           2604    26707    oper_rasp_sam id    DEFAULT     t   ALTER TABLE ONLY public.oper_rasp_sam ALTER COLUMN id SET DEFAULT nextval('public.oper_rasp_sam_id_seq'::regclass);
 ?   ALTER TABLE public.oper_rasp_sam ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    284    285    285            �           2604    26718    oper_rasp_work id    DEFAULT     v   ALTER TABLE ONLY public.oper_rasp_work ALTER COLUMN id SET DEFAULT nextval('public.oper_rasp_work_id_seq'::regclass);
 @   ALTER TABLE public.oper_rasp_work ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    287    286    287            �           2604    26729    order id    DEFAULT     f   ALTER TABLE ONLY public."order" ALTER COLUMN id SET DEFAULT nextval('public.order_id_seq'::regclass);
 9   ALTER TABLE public."order" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    289    288    289            P           2604    26296    organization id    DEFAULT     r   ALTER TABLE ONLY public.organization ALTER COLUMN id SET DEFAULT nextval('public.organization_id_seq'::regclass);
 >   ALTER TABLE public.organization ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    206    205    206            �           2604    26748    ors id    DEFAULT     `   ALTER TABLE ONLY public.ors ALTER COLUMN id SET DEFAULT nextval('public.ors_id_seq'::regclass);
 5   ALTER TABLE public.ors ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    290    291    291            �           2604    26763    otdel id    DEFAULT     d   ALTER TABLE ONLY public.otdel ALTER COLUMN id SET DEFAULT nextval('public.otdel_id_seq'::regclass);
 7   ALTER TABLE public.otdel ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    292    293    293            �           2604    26771    otkl id    DEFAULT     b   ALTER TABLE ONLY public.otkl ALTER COLUMN id SET DEFAULT nextval('public.otkl_id_seq'::regclass);
 6   ALTER TABLE public.otkl ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    295    294    295            �           2604    26786    plan id    DEFAULT     b   ALTER TABLE ONLY public.plan ALTER COLUMN id SET DEFAULT nextval('public.plan_id_seq'::regclass);
 6   ALTER TABLE public.plan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    296    297    297            �           2604    26798 	   planer id    DEFAULT     f   ALTER TABLE ONLY public.planer ALTER COLUMN id SET DEFAULT nextval('public.planer_id_seq'::regclass);
 8   ALTER TABLE public.planer ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    298    299    299            R           2604    26318    post id    DEFAULT     b   ALTER TABLE ONLY public.post ALTER COLUMN id SET DEFAULT nextval('public.post_id_seq'::regclass);
 6   ALTER TABLE public.post ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    209    210    210            �           2604    26828    rc id    DEFAULT     ^   ALTER TABLE ONLY public.rc ALTER COLUMN id SET DEFAULT nextval('public.rc_id_seq'::regclass);
 4   ALTER TABLE public.rc ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    304    305    305            �           2604    26836 	   rework id    DEFAULT     f   ALTER TABLE ONLY public.rework ALTER COLUMN id SET DEFAULT nextval('public.rework_id_seq'::regclass);
 8   ALTER TABLE public.rework ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    306    307    307            �           2604    26844    sam id    DEFAULT     `   ALTER TABLE ONLY public.sam ALTER COLUMN id SET DEFAULT nextval('public.sam_id_seq'::regclass);
 5   ALTER TABLE public.sam ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    309    308    309            �           2604    26863    sam_category id    DEFAULT     r   ALTER TABLE ONLY public.sam_category ALTER COLUMN id SET DEFAULT nextval('public.sam_category_id_seq'::regclass);
 >   ALTER TABLE public.sam_category ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    310    311    311            �           2604    26871    sam_from id    DEFAULT     j   ALTER TABLE ONLY public.sam_from ALTER COLUMN id SET DEFAULT nextval('public.sam_from_id_seq'::regclass);
 :   ALTER TABLE public.sam_from ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    312    313    313            �           2604    26879 
   service id    DEFAULT     h   ALTER TABLE ONLY public.service ALTER COLUMN id SET DEFAULT nextval('public.service_id_seq'::regclass);
 9   ALTER TABLE public.service ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    315    314    315            �           2604    26887    social_inspect id    DEFAULT     v   ALTER TABLE ONLY public.social_inspect ALTER COLUMN id SET DEFAULT nextval('public.social_inspect_id_seq'::regclass);
 @   ALTER TABLE public.social_inspect ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    316    317    317            �           2604    26899    spr_auto id    DEFAULT     j   ALTER TABLE ONLY public.spr_auto ALTER COLUMN id SET DEFAULT nextval('public.spr_auto_id_seq'::regclass);
 :   ALTER TABLE public.spr_auto ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    319    318    319            �           2604    26910    spr_balance id    DEFAULT     p   ALTER TABLE ONLY public.spr_balance ALTER COLUMN id SET DEFAULT nextval('public.spr_balance_id_seq'::regclass);
 =   ALTER TABLE public.spr_balance ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    321    320    321            �           2604    26959    spr_class id    DEFAULT     l   ALTER TABLE ONLY public.spr_class ALTER COLUMN id SET DEFAULT nextval('public.spr_class_id_seq'::regclass);
 ;   ALTER TABLE public.spr_class ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    331    330    331            �           2604    26999    spr_driver id    DEFAULT     n   ALTER TABLE ONLY public.spr_driver ALTER COLUMN id SET DEFAULT nextval('public.spr_driver_id_seq'::regclass);
 <   ALTER TABLE public.spr_driver ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    341    340    341            �           2604    26918    spr_electro id    DEFAULT     p   ALTER TABLE ONLY public.spr_electro ALTER COLUMN id SET DEFAULT nextval('public.spr_electro_id_seq'::regclass);
 =   ALTER TABLE public.spr_electro ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    322    323    323            �           2604    26932    spr_electro_obj id    DEFAULT     x   ALTER TABLE ONLY public.spr_electro_obj ALTER COLUMN id SET DEFAULT nextval('public.spr_electro_obj_id_seq'::regclass);
 A   ALTER TABLE public.spr_electro_obj ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    324    325    325            �           2604    26940    spr_electro_trans id    DEFAULT     |   ALTER TABLE ONLY public.spr_electro_trans ALTER COLUMN id SET DEFAULT nextval('public.spr_electro_trans_id_seq'::regclass);
 C   ALTER TABLE public.spr_electro_trans ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    327    326    327            �           2604    26951    spr_electro_type id    DEFAULT     z   ALTER TABLE ONLY public.spr_electro_type ALTER COLUMN id SET DEFAULT nextval('public.spr_electro_type_id_seq'::regclass);
 B   ALTER TABLE public.spr_electro_type ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    329    328    329            �           2604    26967 
   spr_siz id    DEFAULT     h   ALTER TABLE ONLY public.spr_siz ALTER COLUMN id SET DEFAULT nextval('public.spr_siz_id_seq'::regclass);
 9   ALTER TABLE public.spr_siz ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    333    332    333            �           2604    26975 
   spr_spt id    DEFAULT     h   ALTER TABLE ONLY public.spr_spt ALTER COLUMN id SET DEFAULT nextval('public.spr_spt_id_seq'::regclass);
 9   ALTER TABLE public.spr_spt ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    334    335    335            �           2604    26983    spr_spt_system id    DEFAULT     v   ALTER TABLE ONLY public.spr_spt_system ALTER COLUMN id SET DEFAULT nextval('public.spr_spt_system_id_seq'::regclass);
 @   ALTER TABLE public.spr_spt_system ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    336    337    337            �           2604    26991    spr_spt_type id    DEFAULT     r   ALTER TABLE ONLY public.spr_spt_type ALTER COLUMN id SET DEFAULT nextval('public.spr_spt_type_id_seq'::regclass);
 >   ALTER TABLE public.spr_spt_type ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    338    339    339            U           2604    26348 
   station id    DEFAULT     h   ALTER TABLE ONLY public.station ALTER COLUMN id SET DEFAULT nextval('public.station_id_seq'::regclass);
 9   ALTER TABLE public.station ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            T           2604    26340 	   status id    DEFAULT     f   ALTER TABLE ONLY public.status ALTER COLUMN id SET DEFAULT nextval('public.status_id_seq'::regclass);
 8   ALTER TABLE public.status ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    214    213    214            Q           2604    26307    subdivision id    DEFAULT     p   ALTER TABLE ONLY public.subdivision ALTER COLUMN id SET DEFAULT nextval('public.subdivision_id_seq'::regclass);
 =   ALTER TABLE public.subdivision ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    207    208    208            K           2604    26277    user id    DEFAULT     d   ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);
 8   ALTER TABLE public."user" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    203    204    204            [           2604    26410 
   warning id    DEFAULT     h   ALTER TABLE ONLY public.warning ALTER COLUMN id SET DEFAULT nextval('public.warning_id_seq'::regclass);
 9   ALTER TABLE public.warning ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    229    229            Y           2604    26388 	   window id    DEFAULT     h   ALTER TABLE ONLY public."window" ALTER COLUMN id SET DEFAULT nextval('public.window_id_seq'::regclass);
 :   ALTER TABLE public."window" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    224    225            Z           2604    26399    windowapplication id    DEFAULT     |   ALTER TABLE ONLY public.windowapplication ALTER COLUMN id SET DEFAULT nextval('public.windowapplication_id_seq'::regclass);
 C   ALTER TABLE public.windowapplication ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    226    227            X           2604    26377    work id    DEFAULT     b   ALTER TABLE ONLY public.work ALTER COLUMN id SET DEFAULT nextval('public.work_id_seq'::regclass);
 6   ALTER TABLE public.work ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    222    223            +          0    26426 	   auto_list 
   TABLE DATA           �   COPY public.auto_list (id, organization_id, putdate, auto_id, user_id, hour, mileage, consumption_liter, kiloton, consumption_ton) FROM stdin;
    public          postgres    false    233   ��      -          0    26434    auto_service 
   TABLE DATA           N   COPY public.auto_service (id, title, period_odometr, period_date) FROM stdin;
    public          postgres    false    235   ��      )          0    26418    autotransport 
   TABLE DATA           �   COPY public.autotransport (id, date, subdivision_id, target, contact_user_id, user_id, auto_id, driver_user_id, time_arrival, time_departure, odometr, status, organization_id) FROM stdin;
    public          postgres    false    231   ؋      /          0    26442    briefing 
   TABLE DATA           q   COPY public.briefing (id, employee_user_id, putdate, instructor_user_id, type, period, putdate_next) FROM stdin;
    public          postgres    false    237   ��      K          0    26605    card 
   TABLE DATA           )   COPY public.card (id, title) FROM stdin;
    public          postgres    false    265   �      1          0    26452    category 
   TABLE DATA           S   COPY public.category (id, title, parent_id, otdel_id, organization_id) FROM stdin;
    public          postgres    false    239   /�      3          0    26461    contact 
   TABLE DATA           ]   COPY public.contact (id, putdate, title, text, status, user_id, organization_id) FROM stdin;
    public          postgres    false    241   L�      o          0    26806 
   contractor 
   TABLE DATA           /   COPY public.contractor (id, title) FROM stdin;
    public          postgres    false    301   i�      q          0    26814    contractor_reestr 
   TABLE DATA           �   COPY public.contractor_reestr (id, contractor_id, station_id, date_start, date_finish, notice, ppr, act_dopusk, naryad_dopusk, act_kabel, otv_isp_info, otv_ruk_info, nadzor_doc, nadrzor_otv, title, haracter, organization_id) FROM stdin;
    public          postgres    false    303   ��                0    26366    dga 
   TABLE DATA           �   COPY public.dga (id, putdate, time_on, time_off, kol, station_id, user_id, "underPressure", organization_id, description, moto) FROM stdin;
    public          postgres    false    221   ��                0    26358    dga_list 
   TABLE DATA           C   COPY public.dga_list (id, title, col, organization_id) FROM stdin;
    public          postgres    false    219   ��      5          0    26473    document 
   TABLE DATA              COPY public.document (id, title, file, date_upload, date_modify, "isNews", user_id, category_id, otdel_id, target) FROM stdin;
    public          postgres    false    243   ݌      7          0    26486    fail 
   TABLE DATA           �   COPY public.fail (id, putdate, date_start, time_start, date_finish, time_finish, service_id, description, subdivision_id, user_id, "character", station_id, fail_user_id, organization_id, system) FROM stdin;
    public          postgres    false    245   ��      �          0    27004 	   fail_user 
   TABLE DATA           9   COPY public.fail_user (id, fail_id, user_id) FROM stdin;
    public          postgres    false    343   �      9          0    26500    incoming 
   TABLE DATA           R   COPY public.incoming (id, title, putdate, num, organization_id, file) FROM stdin;
    public          postgres    false    247   4�      ;          0    26512    incoming_sam 
   TABLE DATA           X   COPY public.incoming_sam (id, docs, date, isp_user_id, description, status) FROM stdin;
    public          postgres    false    249   Q�      =          0    26521    journal_electro 
   TABLE DATA           l   COPY public.journal_electro (id, putdate, indication, user_id, spr_electro_id, organization_id) FROM stdin;
    public          postgres    false    251   n�      ?          0    26529    journal_izol 
   TABLE DATA           �   COPY public.journal_izol (id, station_id, place, mark, date_create, r_izol_start, description, shns_user_id, date_finish, step, status, r_izol_end, date_next, "isDevice", organization_id) FROM stdin;
    public          postgres    false    253   ��      A          0    26543    journal_izol_control 
   TABLE DATA           T   COPY public.journal_izol_control (id, journal_izol_id, putdate, r_izol) FROM stdin;
    public          postgres    false    255   ��      C          0    26552    journal_revision_ot 
   TABLE DATA           �   COPY public.journal_revision_ot (id, date_create, station_id, subdivision_id, date_rev, date_time, date_finish, status, revisor, type, upload, result, rev_user_id, first_kom_user_id, second_kom_user_id, time_rev, organization_id) FROM stdin;
    public          postgres    false    257   ō      E          0    26564    journal_revision_ot_file 
   TABLE DATA           n   COPY public.journal_revision_ot_file (id, journal_revision_ot_id, file, date_upload, type, title) FROM stdin;
    public          postgres    false    259   �      G          0    26576    journal_siz 
   TABLE DATA           j   COPY public.journal_siz (id, station_id, subdivision_id, num, putdate, name, organization_id) FROM stdin;
    public          postgres    false    261   ��      I          0    26587    journal_spt 
   TABLE DATA           �   COPY public.journal_spt (id, date_create, time_create, "character", reported, spr_spt_id, date_to, time_to, pers_to, date_finish, time_finish, pers_finish, description, status, shd_finish, organization_id) FROM stdin;
    public          postgres    false    263   �      M          0    26613    kasant 
   TABLE DATA           �   COPY public.kasant (id, putdate, place, cause, time_start, time_finish, time_total, service, resolution, count, time_delay, user_id, organization_id) FROM stdin;
    public          postgres    false    267   9�      O          0    26626    kip 
   TABLE DATA           �   COPY public.kip (id, putdate, station_id, plan, user_id, count_sent, count_install, organization_id, date_install, date_ship, subdivision_id, description) FROM stdin;
    public          postgres    false    269   V�      Q          0    26638 
   kip_device 
   TABLE DATA           t   COPY public.kip_device (id, station_id, subdivision_id, type_si, num_si, pudate, name, organization_id) FROM stdin;
    public          postgres    false    271   s�      S          0    26649    ksotp_category 
   TABLE DATA           U   COPY public.ksotp_category (id, title, parent_id, type, rating, control) FROM stdin;
    public          postgres    false    273   ��                0    26267 	   migration 
   TABLE DATA           8   COPY public.migration (version, apply_time) FROM stdin;
    public          postgres    false    202   ��                0    26326    movement 
   TABLE DATA           x   COPY public.movement (id, pubdate, subdivision_id, user_id, status_id, work1, work2, duty, organization_id) FROM stdin;
    public          postgres    false    212   ^�      U          0    26661    msu 
   TABLE DATA           b  COPY public.msu (id, date_setup, switch, power_supply, msu_num, msu_year, msu_perevod_plus, msu_perevod_min, msu_friction_plus, msu_friction_min, emsu_perevod_plus, emsu_perevod_min, emsu_friction_plus, emsu_friction_min, emsu_usilie_friction_plus, emsu_usilie_friction_min, organization_id, station_id, subdivision_id, user_id, date_create) FROM stdin;
    public          postgres    false    275   {�      �          0    27012    news 
   TABLE DATA           D   COPY public.news (id, title, content, user_id, putdate) FROM stdin;
    public          postgres    false    345   ��      W          0    26670    notice 
   TABLE DATA           c   COPY public.notice (id, give, text, user_id, putdate, subdivision_id, organization_id) FROM stdin;
    public          postgres    false    277   ��      Y          0    26678 	   oper_rasp 
   TABLE DATA           |   COPY public.oper_rasp (id, title, date_create, file, date_finish, status, short_name, user_id, organization_id) FROM stdin;
    public          postgres    false    279   ғ      [          0    26687    oper_rasp_file 
   TABLE DATA           M   COPY public.oper_rasp_file (id, oper_rasp_isp_id, file, putdate) FROM stdin;
    public          postgres    false    281   �      ]          0    26695    oper_rasp_isp 
   TABLE DATA           �   COPY public.oper_rasp_isp (id, oper_rasp_sam_id, isp_user_id, description, date_finish, status, oper_rasp_id, percent, agreed_user_id) FROM stdin;
    public          postgres    false    283   �      _          0    26704    oper_rasp_sam 
   TABLE DATA           H   COPY public.oper_rasp_sam (id, oper_rasp_id, content, date) FROM stdin;
    public          postgres    false    285   )�      a          0    26715    oper_rasp_work 
   TABLE DATA           s   COPY public.oper_rasp_work (id, oper_rasp_id, oper_rasp_isp_id, comment, work, date_term, date_finish) FROM stdin;
    public          postgres    false    287   F�      c          0    26726    order 
   TABLE DATA             COPY public."order" (id, num_off, station_id, card_id, description_off, date_off, time_off, shns_off_user_id, shchd_off_user_id, apply_ds, apply_shch_user_id, date_on, time_on, shns_on_user_id, shchd_on_user_id, description_on, num_on, date, organization_id) FROM stdin;
    public          postgres    false    289   c�                0    26293    organization 
   TABLE DATA           K   COPY public.organization (id, title, code, user_id, code_asui) FROM stdin;
    public          postgres    false    206   ��      e          0    26745    ors 
   TABLE DATA           �   COPY public.ors (id, station_id, sum_main_pch, sum_main_shch, sum_main, putdate, sum_minor_pch, sum_minor_shch, sum_minor, subdivision_id, description) FROM stdin;
    public          postgres    false    291   &�      g          0    26760    otdel 
   TABLE DATA           *   COPY public.otdel (id, title) FROM stdin;
    public          postgres    false    293   C�      i          0    26768    otkl 
   TABLE DATA           �   COPY public.otkl (id, putdate, time_from, time_to, station_id, description, object, transfer_user_id, user_id, organization_id) FROM stdin;
    public          postgres    false    295   `�      k          0    26783    plan 
   TABLE DATA           l   COPY public.plan (id, putdate, work, station, subdivision, expired, organization_id, work_plan) FROM stdin;
    public          postgres    false    297   }�      m          0    26795    planer 
   TABLE DATA           H   COPY public.planer (id, putdate, test, leader, date_create) FROM stdin;
    public          postgres    false    299   ��                0    26315    post 
   TABLE DATA           6   COPY public.post (id, title, short_title) FROM stdin;
    public          postgres    false    210   ��      s          0    26825    rc 
   TABLE DATA           3   COPY public.rc (id, title, station_id) FROM stdin;
    public          postgres    false    305   ��      u          0    26833    rework 
   TABLE DATA           r   COPY public.rework (id, putdate, user_id, time_start, time_finish, sum, description, organization_id) FROM stdin;
    public          postgres    false    307         w          0    26841    sam 
   TABLE DATA             COPY public.sam (id, putdate, time_start, time_finish, sam_from_id, subdivision_id, station_id, responsible_user_id, reason, description, status, user_id, title_object, sam_category_id, level, putdate_send, time_send, date_finish, organization_id, putdate_term) FROM stdin;
    public          postgres    false    309   ߚ      y          0    26860    sam_category 
   TABLE DATA           1   COPY public.sam_category (id, title) FROM stdin;
    public          postgres    false    311   ��      {          0    26868    sam_from 
   TABLE DATA           -   COPY public.sam_from (id, title) FROM stdin;
    public          postgres    false    313   �      }          0    26876    service 
   TABLE DATA           =   COPY public.service (id, title, organization_id) FROM stdin;
    public          postgres    false    315   6�                0    26884    social_inspect 
   TABLE DATA           �   COPY public.social_inspect (id, date_find, station_id, comment, service_id, user_id, who_give, date_last, date_fix, who_control, organization_id) FROM stdin;
    public          postgres    false    317   S�      �          0    26896    spr_auto 
   TABLE DATA           m   COPY public.spr_auto (id, brand, number, organization_id, date_check, ts_reestr, ts_class, fuel) FROM stdin;
    public          postgres    false    319   p�      �          0    26907    spr_balance 
   TABLE DATA           0   COPY public.spr_balance (id, title) FROM stdin;
    public          postgres    false    321   ��      �          0    26956 	   spr_class 
   TABLE DATA           ,   COPY public.spr_class (id, cur) FROM stdin;
    public          postgres    false    331   ��      �          0    26996 
   spr_driver 
   TABLE DATA           1   COPY public.spr_driver (id, user_id) FROM stdin;
    public          postgres    false    341   Ǜ      �          0    26915    spr_electro 
   TABLE DATA           �   COPY public.spr_electro (id, subdivision_id, spr_electro_type_id, spr_electro_obj_id, fider_type, place, number, spr_electro_trans_id, organization_id, active) FROM stdin;
    public          postgres    false    323   �      �          0    26929    spr_electro_obj 
   TABLE DATA           E   COPY public.spr_electro_obj (id, title, organization_id) FROM stdin;
    public          postgres    false    325   �      �          0    26937    spr_electro_trans 
   TABLE DATA           <   COPY public.spr_electro_trans (id, title, k_tr) FROM stdin;
    public          postgres    false    327   �      �          0    26948    spr_electro_type 
   TABLE DATA           5   COPY public.spr_electro_type (id, title) FROM stdin;
    public          postgres    false    329   ;�      �          0    26964    spr_siz 
   TABLE DATA           4   COPY public.spr_siz (id, title, "time") FROM stdin;
    public          postgres    false    333   X�      �          0    26972    spr_spt 
   TABLE DATA           {   COPY public.spr_spt (id, station_id, object, spr_spt_system_id, spr_spt_type_id, spr_balance_id, spr_class_id) FROM stdin;
    public          postgres    false    335   u�      �          0    26980    spr_spt_system 
   TABLE DATA           3   COPY public.spr_spt_system (id, title) FROM stdin;
    public          postgres    false    337   ��      �          0    26988    spr_spt_type 
   TABLE DATA           1   COPY public.spr_spt_type (id, title) FROM stdin;
    public          postgres    false    339   ��                0    26345    station 
   TABLE DATA           _   COPY public.station (id, title, subdivision_id, dga_id, "stType", organization_id) FROM stdin;
    public          postgres    false    216   ̜                0    26351    station_subdivision 
   TABLE DATA           I   COPY public.station_subdivision (station_id, subdivision_id) FROM stdin;
    public          postgres    false    217   �                0    26337    status 
   TABLE DATA           +   COPY public.status (id, title) FROM stdin;
    public          postgres    false    214   �                0    26304    subdivision 
   TABLE DATA           m   COPY public.subdivision (id, organization_id, title, user_id, briefing, ekasui_title, code_asui) FROM stdin;
    public          postgres    false    208   #�                0    26274    user 
   TABLE DATA           �   COPY public."user" (id, username, auth_key, password_hash, password_reset_token, email, status, created_at, updated_at, is_admin, subdivision_id, organization_id, name, post_id, description, phone, reinstruction, verification_token) FROM stdin;
    public          postgres    false    204   ٝ      '          0    26407    warning 
   TABLE DATA           �   COPY public.warning (id, station_id, place, description, date_work, time_from, time_to, date_arm, user_id, time_arm, arm_user_id, organization_id, pub_date, number) FROM stdin;
    public          postgres    false    229   o�      #          0    26385    window 
   TABLE DATA           �   COPY public."window" (id, putdate, organization, work, place, plan, hozed, leader, spec, description, transfer_user_id, user_id) FROM stdin;
    public          postgres    false    225   ��      %          0    26396    windowapplication 
   TABLE DATA           �   COPY public.windowapplication (id, dnc, date, station_id, type, way, km, picket, shutdown, fio_main, fio_bd, representative, sign, shutdown_voltage, description, fio_shchd, written) FROM stdin;
    public          postgres    false    227   ��      !          0    26374    work 
   TABLE DATA           d   COPY public.work (id, code, doc, tkarta, text, period, type, category, organization_id) FROM stdin;
    public          postgres    false    223   ơ      �           0    0    auto_list_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.auto_list_id_seq', 1, false);
          public          postgres    false    232            �           0    0    auto_service_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.auto_service_id_seq', 1, false);
          public          postgres    false    234            �           0    0    autotransport_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.autotransport_id_seq', 1, false);
          public          postgres    false    230            �           0    0    briefing_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.briefing_id_seq', 1, false);
          public          postgres    false    236            �           0    0    card_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.card_id_seq', 1, false);
          public          postgres    false    264            �           0    0    category_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.category_id_seq', 1, false);
          public          postgres    false    238            �           0    0    contact_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.contact_id_seq', 1, false);
          public          postgres    false    240            �           0    0    contractor_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.contractor_id_seq', 1, false);
          public          postgres    false    300            �           0    0    contractor_reestr_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.contractor_reestr_id_seq', 1, false);
          public          postgres    false    302            �           0    0 
   dga_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.dga_id_seq', 1, false);
          public          postgres    false    220            �           0    0    dga_list_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.dga_list_id_seq', 1, false);
          public          postgres    false    218            �           0    0    document_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.document_id_seq', 1, false);
          public          postgres    false    242            �           0    0    fail_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.fail_id_seq', 1, false);
          public          postgres    false    244            �           0    0    fail_user_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.fail_user_id_seq', 1, false);
          public          postgres    false    342            �           0    0    incoming_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.incoming_id_seq', 1, false);
          public          postgres    false    246            �           0    0    incoming_sam_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.incoming_sam_id_seq', 1, false);
          public          postgres    false    248            �           0    0    journal_electro_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.journal_electro_id_seq', 1, false);
          public          postgres    false    250            �           0    0    journal_izol_control_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.journal_izol_control_id_seq', 1, false);
          public          postgres    false    254            �           0    0    journal_izol_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.journal_izol_id_seq', 1, false);
          public          postgres    false    252            �           0    0    journal_revision_ot_file_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.journal_revision_ot_file_id_seq', 1, false);
          public          postgres    false    258            �           0    0    journal_revision_ot_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.journal_revision_ot_id_seq', 1, false);
          public          postgres    false    256            �           0    0    journal_siz_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.journal_siz_id_seq', 1, false);
          public          postgres    false    260            �           0    0    journal_spt_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.journal_spt_id_seq', 1, false);
          public          postgres    false    262            �           0    0    kasant_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.kasant_id_seq', 1, false);
          public          postgres    false    266            �           0    0    kip_device_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.kip_device_id_seq', 1, false);
          public          postgres    false    270            �           0    0 
   kip_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.kip_id_seq', 1, false);
          public          postgres    false    268            �           0    0    ksotp_category_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.ksotp_category_id_seq', 1, false);
          public          postgres    false    272            �           0    0    movement_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.movement_id_seq', 1, false);
          public          postgres    false    211            �           0    0 
   msu_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.msu_id_seq', 1, false);
          public          postgres    false    274            �           0    0    news_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.news_id_seq', 1, false);
          public          postgres    false    344            �           0    0    notice_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.notice_id_seq', 1, false);
          public          postgres    false    276            �           0    0    oper_rasp_file_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.oper_rasp_file_id_seq', 1, false);
          public          postgres    false    280            �           0    0    oper_rasp_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.oper_rasp_id_seq', 1, false);
          public          postgres    false    278            �           0    0    oper_rasp_isp_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.oper_rasp_isp_id_seq', 1, false);
          public          postgres    false    282            �           0    0    oper_rasp_sam_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.oper_rasp_sam_id_seq', 1, false);
          public          postgres    false    284            �           0    0    oper_rasp_work_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.oper_rasp_work_id_seq', 1, false);
          public          postgres    false    286            �           0    0    order_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.order_id_seq', 1, false);
          public          postgres    false    288            �           0    0    organization_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.organization_id_seq', 1, false);
          public          postgres    false    205            �           0    0 
   ors_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.ors_id_seq', 1, false);
          public          postgres    false    290            �           0    0    otdel_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.otdel_id_seq', 1, false);
          public          postgres    false    292            �           0    0    otkl_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.otkl_id_seq', 1, false);
          public          postgres    false    294            �           0    0    plan_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.plan_id_seq', 1, false);
          public          postgres    false    296            �           0    0    planer_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.planer_id_seq', 1, false);
          public          postgres    false    298            �           0    0    post_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.post_id_seq', 1, false);
          public          postgres    false    209            �           0    0 	   rc_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('public.rc_id_seq', 1, false);
          public          postgres    false    304            �           0    0    rework_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.rework_id_seq', 1, false);
          public          postgres    false    306            �           0    0    sam_category_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.sam_category_id_seq', 1, false);
          public          postgres    false    310            �           0    0    sam_from_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.sam_from_id_seq', 1, false);
          public          postgres    false    312            �           0    0 
   sam_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.sam_id_seq', 1, false);
          public          postgres    false    308            �           0    0    service_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.service_id_seq', 1, false);
          public          postgres    false    314            �           0    0    social_inspect_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.social_inspect_id_seq', 1, false);
          public          postgres    false    316            �           0    0    spr_auto_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.spr_auto_id_seq', 1, false);
          public          postgres    false    318            �           0    0    spr_balance_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.spr_balance_id_seq', 1, false);
          public          postgres    false    320            �           0    0    spr_class_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.spr_class_id_seq', 1, false);
          public          postgres    false    330            �           0    0    spr_driver_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.spr_driver_id_seq', 1, false);
          public          postgres    false    340            �           0    0    spr_electro_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.spr_electro_id_seq', 1, false);
          public          postgres    false    322            �           0    0    spr_electro_obj_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.spr_electro_obj_id_seq', 1, false);
          public          postgres    false    324            �           0    0    spr_electro_trans_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.spr_electro_trans_id_seq', 1, false);
          public          postgres    false    326            �           0    0    spr_electro_type_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.spr_electro_type_id_seq', 1, false);
          public          postgres    false    328            �           0    0    spr_siz_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.spr_siz_id_seq', 1, false);
          public          postgres    false    332            �           0    0    spr_spt_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.spr_spt_id_seq', 1, false);
          public          postgres    false    334            �           0    0    spr_spt_system_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.spr_spt_system_id_seq', 1, false);
          public          postgres    false    336            �           0    0    spr_spt_type_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.spr_spt_type_id_seq', 1, false);
          public          postgres    false    338            �           0    0    station_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.station_id_seq', 1, false);
          public          postgres    false    215            �           0    0    status_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.status_id_seq', 1, false);
          public          postgres    false    213            �           0    0    subdivision_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.subdivision_id_seq', 1, false);
          public          postgres    false    207            �           0    0    user_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.user_id_seq', 5, true);
          public          postgres    false    203            �           0    0    warning_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.warning_id_seq', 1, false);
          public          postgres    false    228            �           0    0    window_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.window_id_seq', 1, false);
          public          postgres    false    224            �           0    0    windowapplication_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.windowapplication_id_seq', 1, false);
          public          postgres    false    226            �           0    0    work_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.work_id_seq', 1, false);
          public          postgres    false    222                        2606    26431    auto_list auto_list_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.auto_list
    ADD CONSTRAINT auto_list_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.auto_list DROP CONSTRAINT auto_list_pkey;
       public            postgres    false    233            %           2606    26439    auto_service auto_service_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.auto_service
    ADD CONSTRAINT auto_service_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.auto_service DROP CONSTRAINT auto_service_pkey;
       public            postgres    false    235                       2606    26423     autotransport autotransport_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.autotransport
    ADD CONSTRAINT autotransport_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.autotransport DROP CONSTRAINT autotransport_pkey;
       public            postgres    false    231            '           2606    26449    briefing briefing_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.briefing
    ADD CONSTRAINT briefing_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.briefing DROP CONSTRAINT briefing_pkey;
       public            postgres    false    237            f           2606    26610    card card_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.card
    ADD CONSTRAINT card_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.card DROP CONSTRAINT card_pkey;
       public            postgres    false    265            +           2606    26458    category category_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.category
    ADD CONSTRAINT category_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.category DROP CONSTRAINT category_pkey;
       public            postgres    false    239            /           2606    26470    contact contact_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.contact
    ADD CONSTRAINT contact_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.contact DROP CONSTRAINT contact_pkey;
       public            postgres    false    241            �           2606    26811    contractor contractor_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.contractor
    ADD CONSTRAINT contractor_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.contractor DROP CONSTRAINT contractor_pkey;
       public            postgres    false    301            �           2606    26822 (   contractor_reestr contractor_reestr_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.contractor_reestr
    ADD CONSTRAINT contractor_reestr_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.contractor_reestr DROP CONSTRAINT contractor_reestr_pkey;
       public            postgres    false    303                       2606    26363    dga_list dga_list_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.dga_list
    ADD CONSTRAINT dga_list_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.dga_list DROP CONSTRAINT dga_list_pkey;
       public            postgres    false    219                       2606    26371    dga dga_pkey 
   CONSTRAINT     J   ALTER TABLE ONLY public.dga
    ADD CONSTRAINT dga_pkey PRIMARY KEY (id);
 6   ALTER TABLE ONLY public.dga DROP CONSTRAINT dga_pkey;
       public            postgres    false    221            3           2606    26483    document document_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.document
    ADD CONSTRAINT document_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.document DROP CONSTRAINT document_pkey;
       public            postgres    false    243            8           2606    26497    fail fail_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.fail
    ADD CONSTRAINT fail_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.fail DROP CONSTRAINT fail_pkey;
       public            postgres    false    245            �           2606    27009    fail_user fail_user_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.fail_user
    ADD CONSTRAINT fail_user_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.fail_user DROP CONSTRAINT fail_user_pkey;
       public            postgres    false    343            A           2606    26509    incoming incoming_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.incoming
    ADD CONSTRAINT incoming_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.incoming DROP CONSTRAINT incoming_pkey;
       public            postgres    false    247            D           2606    26518    incoming_sam incoming_sam_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.incoming_sam
    ADD CONSTRAINT incoming_sam_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.incoming_sam DROP CONSTRAINT incoming_sam_pkey;
       public            postgres    false    249            I           2606    26526 $   journal_electro journal_electro_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.journal_electro
    ADD CONSTRAINT journal_electro_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.journal_electro DROP CONSTRAINT journal_electro_pkey;
       public            postgres    false    251            Q           2606    26549 .   journal_izol_control journal_izol_control_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.journal_izol_control
    ADD CONSTRAINT journal_izol_control_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.journal_izol_control DROP CONSTRAINT journal_izol_control_pkey;
       public            postgres    false    255            N           2606    26540    journal_izol journal_izol_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.journal_izol
    ADD CONSTRAINT journal_izol_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.journal_izol DROP CONSTRAINT journal_izol_pkey;
       public            postgres    false    253            [           2606    26573 6   journal_revision_ot_file journal_revision_ot_file_pkey 
   CONSTRAINT     t   ALTER TABLE ONLY public.journal_revision_ot_file
    ADD CONSTRAINT journal_revision_ot_file_pkey PRIMARY KEY (id);
 `   ALTER TABLE ONLY public.journal_revision_ot_file DROP CONSTRAINT journal_revision_ot_file_pkey;
       public            postgres    false    259            X           2606    26561 ,   journal_revision_ot journal_revision_ot_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.journal_revision_ot
    ADD CONSTRAINT journal_revision_ot_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.journal_revision_ot DROP CONSTRAINT journal_revision_ot_pkey;
       public            postgres    false    257            `           2606    26584    journal_siz journal_siz_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.journal_siz
    ADD CONSTRAINT journal_siz_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.journal_siz DROP CONSTRAINT journal_siz_pkey;
       public            postgres    false    261            d           2606    26602    journal_spt journal_spt_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.journal_spt
    ADD CONSTRAINT journal_spt_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.journal_spt DROP CONSTRAINT journal_spt_pkey;
       public            postgres    false    263            j           2606    26623    kasant kasant_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.kasant
    ADD CONSTRAINT kasant_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.kasant DROP CONSTRAINT kasant_pkey;
       public            postgres    false    267            u           2606    26646    kip_device kip_device_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.kip_device
    ADD CONSTRAINT kip_device_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.kip_device DROP CONSTRAINT kip_device_pkey;
       public            postgres    false    271            p           2606    26635    kip kip_pkey 
   CONSTRAINT     J   ALTER TABLE ONLY public.kip
    ADD CONSTRAINT kip_pkey PRIMARY KEY (id);
 6   ALTER TABLE ONLY public.kip DROP CONSTRAINT kip_pkey;
       public            postgres    false    269            x           2606    26658 "   ksotp_category ksotp_category_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.ksotp_category
    ADD CONSTRAINT ksotp_category_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.ksotp_category DROP CONSTRAINT ksotp_category_pkey;
       public            postgres    false    273            �           2606    26271    migration migration_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.migration
    ADD CONSTRAINT migration_pkey PRIMARY KEY (version);
 B   ALTER TABLE ONLY public.migration DROP CONSTRAINT migration_pkey;
       public            postgres    false    202            �           2606    26334    movement movement_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.movement
    ADD CONSTRAINT movement_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.movement DROP CONSTRAINT movement_pkey;
       public            postgres    false    212                       2606    26667    msu msu_pkey 
   CONSTRAINT     J   ALTER TABLE ONLY public.msu
    ADD CONSTRAINT msu_pkey PRIMARY KEY (id);
 6   ALTER TABLE ONLY public.msu DROP CONSTRAINT msu_pkey;
       public            postgres    false    275                        2606    27020    news news_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.news
    ADD CONSTRAINT news_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.news DROP CONSTRAINT news_pkey;
       public            postgres    false    345            �           2606    26675    notice notice_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.notice
    ADD CONSTRAINT notice_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.notice DROP CONSTRAINT notice_pkey;
       public            postgres    false    277            �           2606    26692 "   oper_rasp_file oper_rasp_file_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.oper_rasp_file
    ADD CONSTRAINT oper_rasp_file_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.oper_rasp_file DROP CONSTRAINT oper_rasp_file_pkey;
       public            postgres    false    281            �           2606    26701     oper_rasp_isp oper_rasp_isp_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.oper_rasp_isp
    ADD CONSTRAINT oper_rasp_isp_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.oper_rasp_isp DROP CONSTRAINT oper_rasp_isp_pkey;
       public            postgres    false    283            �           2606    26684    oper_rasp oper_rasp_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.oper_rasp
    ADD CONSTRAINT oper_rasp_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.oper_rasp DROP CONSTRAINT oper_rasp_pkey;
       public            postgres    false    279            �           2606    26712     oper_rasp_sam oper_rasp_sam_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.oper_rasp_sam
    ADD CONSTRAINT oper_rasp_sam_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.oper_rasp_sam DROP CONSTRAINT oper_rasp_sam_pkey;
       public            postgres    false    285            �           2606    26723 "   oper_rasp_work oper_rasp_work_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.oper_rasp_work
    ADD CONSTRAINT oper_rasp_work_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.oper_rasp_work DROP CONSTRAINT oper_rasp_work_pkey;
       public            postgres    false    287            �           2606    26742    order order_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public."order"
    ADD CONSTRAINT order_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public."order" DROP CONSTRAINT order_pkey;
       public            postgres    false    289            �           2606    26301    organization organization_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.organization
    ADD CONSTRAINT organization_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.organization DROP CONSTRAINT organization_pkey;
       public            postgres    false    206            �           2606    26757    ors ors_pkey 
   CONSTRAINT     J   ALTER TABLE ONLY public.ors
    ADD CONSTRAINT ors_pkey PRIMARY KEY (id);
 6   ALTER TABLE ONLY public.ors DROP CONSTRAINT ors_pkey;
       public            postgres    false    291            �           2606    26765    otdel otdel_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.otdel
    ADD CONSTRAINT otdel_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.otdel DROP CONSTRAINT otdel_pkey;
       public            postgres    false    293            �           2606    26780    otkl otkl_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.otkl
    ADD CONSTRAINT otkl_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.otkl DROP CONSTRAINT otkl_pkey;
       public            postgres    false    295            �           2606    26792    plan plan_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.plan
    ADD CONSTRAINT plan_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.plan DROP CONSTRAINT plan_pkey;
       public            postgres    false    297            �           2606    26803    planer planer_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.planer
    ADD CONSTRAINT planer_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.planer DROP CONSTRAINT planer_pkey;
       public            postgres    false    299            �           2606    26323    post post_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.post
    ADD CONSTRAINT post_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.post DROP CONSTRAINT post_pkey;
       public            postgres    false    210            �           2606    26830 
   rc rc_pkey 
   CONSTRAINT     H   ALTER TABLE ONLY public.rc
    ADD CONSTRAINT rc_pkey PRIMARY KEY (id);
 4   ALTER TABLE ONLY public.rc DROP CONSTRAINT rc_pkey;
       public            postgres    false    305            �           2606    26838    rework rework_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.rework
    ADD CONSTRAINT rework_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.rework DROP CONSTRAINT rework_pkey;
       public            postgres    false    307            �           2606    26865    sam_category sam_category_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.sam_category
    ADD CONSTRAINT sam_category_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.sam_category DROP CONSTRAINT sam_category_pkey;
       public            postgres    false    311            �           2606    26873    sam_from sam_from_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.sam_from
    ADD CONSTRAINT sam_from_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.sam_from DROP CONSTRAINT sam_from_pkey;
       public            postgres    false    313            �           2606    26857    sam sam_pkey 
   CONSTRAINT     J   ALTER TABLE ONLY public.sam
    ADD CONSTRAINT sam_pkey PRIMARY KEY (id);
 6   ALTER TABLE ONLY public.sam DROP CONSTRAINT sam_pkey;
       public            postgres    false    309            �           2606    26881    service service_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.service
    ADD CONSTRAINT service_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.service DROP CONSTRAINT service_pkey;
       public            postgres    false    315            �           2606    26893 "   social_inspect social_inspect_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.social_inspect
    ADD CONSTRAINT social_inspect_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.social_inspect DROP CONSTRAINT social_inspect_pkey;
       public            postgres    false    317            �           2606    26904    spr_auto spr_auto_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.spr_auto
    ADD CONSTRAINT spr_auto_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.spr_auto DROP CONSTRAINT spr_auto_pkey;
       public            postgres    false    319            �           2606    26912    spr_balance spr_balance_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.spr_balance
    ADD CONSTRAINT spr_balance_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.spr_balance DROP CONSTRAINT spr_balance_pkey;
       public            postgres    false    321            �           2606    26961    spr_class spr_class_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.spr_class
    ADD CONSTRAINT spr_class_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.spr_class DROP CONSTRAINT spr_class_pkey;
       public            postgres    false    331            �           2606    27001    spr_driver spr_driver_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.spr_driver
    ADD CONSTRAINT spr_driver_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.spr_driver DROP CONSTRAINT spr_driver_pkey;
       public            postgres    false    341            �           2606    26934 $   spr_electro_obj spr_electro_obj_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.spr_electro_obj
    ADD CONSTRAINT spr_electro_obj_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.spr_electro_obj DROP CONSTRAINT spr_electro_obj_pkey;
       public            postgres    false    325            �           2606    26926    spr_electro spr_electro_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.spr_electro
    ADD CONSTRAINT spr_electro_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.spr_electro DROP CONSTRAINT spr_electro_pkey;
       public            postgres    false    323            �           2606    26945 (   spr_electro_trans spr_electro_trans_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.spr_electro_trans
    ADD CONSTRAINT spr_electro_trans_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.spr_electro_trans DROP CONSTRAINT spr_electro_trans_pkey;
       public            postgres    false    327            �           2606    26953 &   spr_electro_type spr_electro_type_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.spr_electro_type
    ADD CONSTRAINT spr_electro_type_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.spr_electro_type DROP CONSTRAINT spr_electro_type_pkey;
       public            postgres    false    329            �           2606    26969    spr_siz spr_siz_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.spr_siz
    ADD CONSTRAINT spr_siz_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.spr_siz DROP CONSTRAINT spr_siz_pkey;
       public            postgres    false    333            �           2606    26977    spr_spt spr_spt_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.spr_spt
    ADD CONSTRAINT spr_spt_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.spr_spt DROP CONSTRAINT spr_spt_pkey;
       public            postgres    false    335            �           2606    26985 "   spr_spt_system spr_spt_system_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.spr_spt_system
    ADD CONSTRAINT spr_spt_system_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.spr_spt_system DROP CONSTRAINT spr_spt_system_pkey;
       public            postgres    false    337            �           2606    26993    spr_spt_type spr_spt_type_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.spr_spt_type
    ADD CONSTRAINT spr_spt_type_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.spr_spt_type DROP CONSTRAINT spr_spt_type_pkey;
       public            postgres    false    339            �           2606    26350    station station_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.station
    ADD CONSTRAINT station_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.station DROP CONSTRAINT station_pkey;
       public            postgres    false    216                        2606    26355 ,   station_subdivision station_subdivision_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.station_subdivision
    ADD CONSTRAINT station_subdivision_pkey PRIMARY KEY (station_id, subdivision_id);
 V   ALTER TABLE ONLY public.station_subdivision DROP CONSTRAINT station_subdivision_pkey;
       public            postgres    false    217    217            �           2606    26342    status status_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.status
    ADD CONSTRAINT status_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.status DROP CONSTRAINT status_pkey;
       public            postgres    false    214            �           2606    26312    subdivision subdivision_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.subdivision
    ADD CONSTRAINT subdivision_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.subdivision DROP CONSTRAINT subdivision_pkey;
       public            postgres    false    208            �           2606    26289 "   user user_password_reset_token_key 
   CONSTRAINT     o   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_password_reset_token_key UNIQUE (password_reset_token);
 N   ALTER TABLE ONLY public."user" DROP CONSTRAINT user_password_reset_token_key;
       public            postgres    false    204            �           2606    26285    user user_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public."user" DROP CONSTRAINT user_pkey;
       public            postgres    false    204            �           2606    26287    user user_username_key 
   CONSTRAINT     W   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_username_key UNIQUE (username);
 B   ALTER TABLE ONLY public."user" DROP CONSTRAINT user_username_key;
       public            postgres    false    204                       2606    26415    warning warning_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.warning
    ADD CONSTRAINT warning_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.warning DROP CONSTRAINT warning_pkey;
       public            postgres    false    229                       2606    26393    window window_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public."window"
    ADD CONSTRAINT window_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public."window" DROP CONSTRAINT window_pkey;
       public            postgres    false    225                       2606    26404 (   windowapplication windowapplication_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.windowapplication
    ADD CONSTRAINT windowapplication_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.windowapplication DROP CONSTRAINT windowapplication_pkey;
       public            postgres    false    227            	           2606    26382    work work_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.work
    ADD CONSTRAINT work_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.work DROP CONSTRAINT work_pkey;
       public            postgres    false    223            !           1259    27201    idx-auto_list-auto_id    INDEX     P   CREATE INDEX "idx-auto_list-auto_id" ON public.auto_list USING btree (auto_id);
 +   DROP INDEX public."idx-auto_list-auto_id";
       public            postgres    false    233            "           1259    27207    idx-auto_list-organization_id    INDEX     `   CREATE INDEX "idx-auto_list-organization_id" ON public.auto_list USING btree (organization_id);
 3   DROP INDEX public."idx-auto_list-organization_id";
       public            postgres    false    233            #           1259    27195    idx-auto_list-user_id    INDEX     P   CREATE INDEX "idx-auto_list-user_id" ON public.auto_list USING btree (user_id);
 +   DROP INDEX public."idx-auto_list-user_id";
       public            postgres    false    233                       1259    27177    idx-autotransport-auto_id    INDEX     X   CREATE INDEX "idx-autotransport-auto_id" ON public.autotransport USING btree (auto_id);
 /   DROP INDEX public."idx-autotransport-auto_id";
       public            postgres    false    231                       1259    27165 !   idx-autotransport-contact_user_id    INDEX     h   CREATE INDEX "idx-autotransport-contact_user_id" ON public.autotransport USING btree (contact_user_id);
 7   DROP INDEX public."idx-autotransport-contact_user_id";
       public            postgres    false    231                       1259    27183     idx-autotransport-driver_user_id    INDEX     f   CREATE INDEX "idx-autotransport-driver_user_id" ON public.autotransport USING btree (driver_user_id);
 6   DROP INDEX public."idx-autotransport-driver_user_id";
       public            postgres    false    231                       1259    27153 !   idx-autotransport-organization_id    INDEX     h   CREATE INDEX "idx-autotransport-organization_id" ON public.autotransport USING btree (organization_id);
 7   DROP INDEX public."idx-autotransport-organization_id";
       public            postgres    false    231                       1259    27159     idx-autotransport-subdivision_id    INDEX     f   CREATE INDEX "idx-autotransport-subdivision_id" ON public.autotransport USING btree (subdivision_id);
 6   DROP INDEX public."idx-autotransport-subdivision_id";
       public            postgres    false    231                       1259    27171    idx-autotransport-user_id    INDEX     X   CREATE INDEX "idx-autotransport-user_id" ON public.autotransport USING btree (user_id);
 /   DROP INDEX public."idx-autotransport-user_id";
       public            postgres    false    231            (           1259    27219    idx-briefing-employee_user_id    INDEX     `   CREATE INDEX "idx-briefing-employee_user_id" ON public.briefing USING btree (employee_user_id);
 3   DROP INDEX public."idx-briefing-employee_user_id";
       public            postgres    false    237            )           1259    27213    idx-briefing-instructor_user_id    INDEX     d   CREATE INDEX "idx-briefing-instructor_user_id" ON public.briefing USING btree (instructor_user_id);
 5   DROP INDEX public."idx-briefing-instructor_user_id";
       public            postgres    false    237            ,           1259    27225    idx-category-organization_id    INDEX     ^   CREATE INDEX "idx-category-organization_id" ON public.category USING btree (organization_id);
 2   DROP INDEX public."idx-category-organization_id";
       public            postgres    false    239            -           1259    27231    idx-category-otdel_id    INDEX     P   CREATE INDEX "idx-category-otdel_id" ON public.category USING btree (otdel_id);
 +   DROP INDEX public."idx-category-otdel_id";
       public            postgres    false    239            0           1259    27237    idx-contact-organization_id    INDEX     \   CREATE INDEX "idx-contact-organization_id" ON public.contact USING btree (organization_id);
 1   DROP INDEX public."idx-contact-organization_id";
       public            postgres    false    241            1           1259    27243    idx-contact-user_id    INDEX     L   CREATE INDEX "idx-contact-user_id" ON public.contact USING btree (user_id);
 )   DROP INDEX public."idx-contact-user_id";
       public            postgres    false    241            �           1259    27675 #   idx-contractor_reestr-contractor_id    INDEX     l   CREATE INDEX "idx-contractor_reestr-contractor_id" ON public.contractor_reestr USING btree (contractor_id);
 9   DROP INDEX public."idx-contractor_reestr-contractor_id";
       public            postgres    false    303            �           1259    27669 %   idx-contractor_reestr-organization_id    INDEX     p   CREATE INDEX "idx-contractor_reestr-organization_id" ON public.contractor_reestr USING btree (organization_id);
 ;   DROP INDEX public."idx-contractor_reestr-organization_id";
       public            postgres    false    303            �           1259    27663     idx-contractor_reestr-station_id    INDEX     f   CREATE INDEX "idx-contractor_reestr-station_id" ON public.contractor_reestr USING btree (station_id);
 6   DROP INDEX public."idx-contractor_reestr-station_id";
       public            postgres    false    303                       1259    27105    idx-dga-organization_id    INDEX     T   CREATE INDEX "idx-dga-organization_id" ON public.dga USING btree (organization_id);
 -   DROP INDEX public."idx-dga-organization_id";
       public            postgres    false    221                       1259    27051    idx-dga_list-organization_id    INDEX     ^   CREATE INDEX "idx-dga_list-organization_id" ON public.dga_list USING btree (organization_id);
 2   DROP INDEX public."idx-dga_list-organization_id";
       public            postgres    false    219            4           1259    27255    idx-document-category_id    INDEX     V   CREATE INDEX "idx-document-category_id" ON public.document USING btree (category_id);
 .   DROP INDEX public."idx-document-category_id";
       public            postgres    false    243            5           1259    27261    idx-document-otdel_id    INDEX     P   CREATE INDEX "idx-document-otdel_id" ON public.document USING btree (otdel_id);
 +   DROP INDEX public."idx-document-otdel_id";
       public            postgres    false    243            6           1259    27249    idx-document-user_id    INDEX     N   CREATE INDEX "idx-document-user_id" ON public.document USING btree (user_id);
 *   DROP INDEX public."idx-document-user_id";
       public            postgres    false    243            9           1259    27273    idx-fail-fail_user_id    INDEX     P   CREATE INDEX "idx-fail-fail_user_id" ON public.fail USING btree (fail_user_id);
 +   DROP INDEX public."idx-fail-fail_user_id";
       public            postgres    false    245            :           1259    27267    idx-fail-organization_id    INDEX     V   CREATE INDEX "idx-fail-organization_id" ON public.fail USING btree (organization_id);
 .   DROP INDEX public."idx-fail-organization_id";
       public            postgres    false    245            ;           1259    27297    idx-fail-service_id    INDEX     L   CREATE INDEX "idx-fail-service_id" ON public.fail USING btree (service_id);
 )   DROP INDEX public."idx-fail-service_id";
       public            postgres    false    245            <           1259    27279    idx-fail-station_id    INDEX     L   CREATE INDEX "idx-fail-station_id" ON public.fail USING btree (station_id);
 )   DROP INDEX public."idx-fail-station_id";
       public            postgres    false    245            =           1259    27291    idx-fail-subdivision_id    INDEX     T   CREATE INDEX "idx-fail-subdivision_id" ON public.fail USING btree (subdivision_id);
 -   DROP INDEX public."idx-fail-subdivision_id";
       public            postgres    false    245            >           1259    27285    idx-fail-user_id    INDEX     F   CREATE INDEX "idx-fail-user_id" ON public.fail USING btree (user_id);
 &   DROP INDEX public."idx-fail-user_id";
       public            postgres    false    245            �           1259    27855    idx-fail_user-fail_id    INDEX     P   CREATE INDEX "idx-fail_user-fail_id" ON public.fail_user USING btree (fail_id);
 +   DROP INDEX public."idx-fail_user-fail_id";
       public            postgres    false    343            �           1259    27849    idx-fail_user-user_id    INDEX     P   CREATE INDEX "idx-fail_user-user_id" ON public.fail_user USING btree (user_id);
 +   DROP INDEX public."idx-fail_user-user_id";
       public            postgres    false    343            ?           1259    27303    idx-incoming-organization_id    INDEX     ^   CREATE INDEX "idx-incoming-organization_id" ON public.incoming USING btree (organization_id);
 2   DROP INDEX public."idx-incoming-organization_id";
       public            postgres    false    247            B           1259    27345    idx-incoming_sam-isp_user_id    INDEX     ^   CREATE INDEX "idx-incoming_sam-isp_user_id" ON public.incoming_sam USING btree (isp_user_id);
 2   DROP INDEX public."idx-incoming_sam-isp_user_id";
       public            postgres    false    249            E           1259    27309 #   idx-journal_electro-organization_id    INDEX     l   CREATE INDEX "idx-journal_electro-organization_id" ON public.journal_electro USING btree (organization_id);
 9   DROP INDEX public."idx-journal_electro-organization_id";
       public            postgres    false    251            F           1259    27315 "   idx-journal_electro-spr_electro_id    INDEX     j   CREATE INDEX "idx-journal_electro-spr_electro_id" ON public.journal_electro USING btree (spr_electro_id);
 8   DROP INDEX public."idx-journal_electro-spr_electro_id";
       public            postgres    false    251            G           1259    27321    idx-journal_electro-user_id    INDEX     \   CREATE INDEX "idx-journal_electro-user_id" ON public.journal_electro USING btree (user_id);
 1   DROP INDEX public."idx-journal_electro-user_id";
       public            postgres    false    251            J           1259    27327     idx-journal_izol-organization_id    INDEX     f   CREATE INDEX "idx-journal_izol-organization_id" ON public.journal_izol USING btree (organization_id);
 6   DROP INDEX public."idx-journal_izol-organization_id";
       public            postgres    false    253            K           1259    27333    idx-journal_izol-shns_user_id    INDEX     `   CREATE INDEX "idx-journal_izol-shns_user_id" ON public.journal_izol USING btree (shns_user_id);
 3   DROP INDEX public."idx-journal_izol-shns_user_id";
       public            postgres    false    253            L           1259    27339    idx-journal_izol-station_id    INDEX     \   CREATE INDEX "idx-journal_izol-station_id" ON public.journal_izol USING btree (station_id);
 1   DROP INDEX public."idx-journal_izol-station_id";
       public            postgres    false    253            O           1259    27351 (   idx-journal_izol_control-journal_izol_id    INDEX     v   CREATE INDEX "idx-journal_izol_control-journal_izol_id" ON public.journal_izol_control USING btree (journal_izol_id);
 >   DROP INDEX public."idx-journal_izol_control-journal_izol_id";
       public            postgres    false    255            R           1259    27375 )   idx-journal_revision_ot-first_kom_user_id    INDEX     x   CREATE INDEX "idx-journal_revision_ot-first_kom_user_id" ON public.journal_revision_ot USING btree (first_kom_user_id);
 ?   DROP INDEX public."idx-journal_revision_ot-first_kom_user_id";
       public            postgres    false    257            S           1259    27363 '   idx-journal_revision_ot-organization_id    INDEX     t   CREATE INDEX "idx-journal_revision_ot-organization_id" ON public.journal_revision_ot USING btree (organization_id);
 =   DROP INDEX public."idx-journal_revision_ot-organization_id";
       public            postgres    false    257            T           1259    27369 *   idx-journal_revision_ot-second_kom_user_id    INDEX     y   CREATE INDEX "idx-journal_revision_ot-second_kom_user_id" ON public.journal_revision_ot USING btree (first_kom_user_id);
 @   DROP INDEX public."idx-journal_revision_ot-second_kom_user_id";
       public            postgres    false    257            U           1259    27387 "   idx-journal_revision_ot-station_id    INDEX     j   CREATE INDEX "idx-journal_revision_ot-station_id" ON public.journal_revision_ot USING btree (station_id);
 8   DROP INDEX public."idx-journal_revision_ot-station_id";
       public            postgres    false    257            V           1259    27381 &   idx-journal_revision_ot-subdivision_id    INDEX     r   CREATE INDEX "idx-journal_revision_ot-subdivision_id" ON public.journal_revision_ot USING btree (subdivision_id);
 <   DROP INDEX public."idx-journal_revision_ot-subdivision_id";
       public            postgres    false    257            Y           1259    27357 3   idx-journal_revision_ot_file-journal_revision_ot_id    INDEX     �   CREATE INDEX "idx-journal_revision_ot_file-journal_revision_ot_id" ON public.journal_revision_ot_file USING btree (journal_revision_ot_id);
 I   DROP INDEX public."idx-journal_revision_ot_file-journal_revision_ot_id";
       public            postgres    false    259            \           1259    27393    idx-journal_siz-organization_id    INDEX     d   CREATE INDEX "idx-journal_siz-organization_id" ON public.journal_siz USING btree (organization_id);
 5   DROP INDEX public."idx-journal_siz-organization_id";
       public            postgres    false    261            ]           1259    27405    idx-journal_siz-station_id    INDEX     Z   CREATE INDEX "idx-journal_siz-station_id" ON public.journal_siz USING btree (station_id);
 0   DROP INDEX public."idx-journal_siz-station_id";
       public            postgres    false    261            ^           1259    27399    idx-journal_siz-subdivision_id    INDEX     b   CREATE INDEX "idx-journal_siz-subdivision_id" ON public.journal_siz USING btree (subdivision_id);
 4   DROP INDEX public."idx-journal_siz-subdivision_id";
       public            postgres    false    261            a           1259    27441    idx-journal_spt-organization_id    INDEX     d   CREATE INDEX "idx-journal_spt-organization_id" ON public.journal_spt USING btree (organization_id);
 5   DROP INDEX public."idx-journal_spt-organization_id";
       public            postgres    false    263            b           1259    27435    idx-journal_spt-spr_spt_id    INDEX     Z   CREATE INDEX "idx-journal_spt-spr_spt_id" ON public.journal_spt USING btree (spr_spt_id);
 0   DROP INDEX public."idx-journal_spt-spr_spt_id";
       public            postgres    false    263            g           1259    27453    idx-kasant-organization_id    INDEX     Z   CREATE INDEX "idx-kasant-organization_id" ON public.kasant USING btree (organization_id);
 0   DROP INDEX public."idx-kasant-organization_id";
       public            postgres    false    267            h           1259    27447    idx-kasant-user_id    INDEX     J   CREATE INDEX "idx-kasant-user_id" ON public.kasant USING btree (user_id);
 (   DROP INDEX public."idx-kasant-user_id";
       public            postgres    false    267            k           1259    27423    idx-kip-organization_id    INDEX     T   CREATE INDEX "idx-kip-organization_id" ON public.kip USING btree (organization_id);
 -   DROP INDEX public."idx-kip-organization_id";
       public            postgres    false    269            l           1259    27411    idx-kip-station_id    INDEX     J   CREATE INDEX "idx-kip-station_id" ON public.kip USING btree (station_id);
 (   DROP INDEX public."idx-kip-station_id";
       public            postgres    false    269            m           1259    27429    idx-kip-subdivision_id    INDEX     R   CREATE INDEX "idx-kip-subdivision_id" ON public.kip USING btree (subdivision_id);
 ,   DROP INDEX public."idx-kip-subdivision_id";
       public            postgres    false    269            n           1259    27417    idx-kip-user_id    INDEX     D   CREATE INDEX "idx-kip-user_id" ON public.kip USING btree (user_id);
 %   DROP INDEX public."idx-kip-user_id";
       public            postgres    false    269            q           1259    27465    idx-kip_device-organization_id    INDEX     b   CREATE INDEX "idx-kip_device-organization_id" ON public.kip_device USING btree (organization_id);
 4   DROP INDEX public."idx-kip_device-organization_id";
       public            postgres    false    271            r           1259    27459    idx-kip_device-station_id    INDEX     X   CREATE INDEX "idx-kip_device-station_id" ON public.kip_device USING btree (station_id);
 /   DROP INDEX public."idx-kip_device-station_id";
       public            postgres    false    271            s           1259    27471    idx-kip_device-subdivision_id    INDEX     `   CREATE INDEX "idx-kip_device-subdivision_id" ON public.kip_device USING btree (subdivision_id);
 3   DROP INDEX public."idx-kip_device-subdivision_id";
       public            postgres    false    271            v           1259    27495    idx-ksotp_category-parent_id    INDEX     ^   CREATE INDEX "idx-ksotp_category-parent_id" ON public.ksotp_category USING btree (parent_id);
 2   DROP INDEX public."idx-ksotp_category-parent_id";
       public            postgres    false    273            �           1259    27057    idx-movement-organization_id    INDEX     ^   CREATE INDEX "idx-movement-organization_id" ON public.movement USING btree (organization_id);
 2   DROP INDEX public."idx-movement-organization_id";
       public            postgres    false    212            �           1259    27063    idx-movement-status_id    INDEX     R   CREATE INDEX "idx-movement-status_id" ON public.movement USING btree (status_id);
 ,   DROP INDEX public."idx-movement-status_id";
       public            postgres    false    212            �           1259    27075    idx-movement-subdivision_id    INDEX     \   CREATE INDEX "idx-movement-subdivision_id" ON public.movement USING btree (subdivision_id);
 1   DROP INDEX public."idx-movement-subdivision_id";
       public            postgres    false    212            �           1259    27069    idx-movement-user_id    INDEX     N   CREATE INDEX "idx-movement-user_id" ON public.movement USING btree (user_id);
 *   DROP INDEX public."idx-movement-user_id";
       public            postgres    false    212            y           1259    27519    idx-msu-organization_id    INDEX     T   CREATE INDEX "idx-msu-organization_id" ON public.msu USING btree (organization_id);
 -   DROP INDEX public."idx-msu-organization_id";
       public            postgres    false    275            z           1259    27513    idx-msu-station_id    INDEX     J   CREATE INDEX "idx-msu-station_id" ON public.msu USING btree (station_id);
 (   DROP INDEX public."idx-msu-station_id";
       public            postgres    false    275            {           1259    27507    idx-msu-subdivision_id    INDEX     R   CREATE INDEX "idx-msu-subdivision_id" ON public.msu USING btree (subdivision_id);
 ,   DROP INDEX public."idx-msu-subdivision_id";
       public            postgres    false    275            |           1259    27501    idx-msu-user_id    INDEX     D   CREATE INDEX "idx-msu-user_id" ON public.msu USING btree (user_id);
 %   DROP INDEX public."idx-msu-user_id";
       public            postgres    false    275            �           1259    27861    idx-news-user_id    INDEX     F   CREATE INDEX "idx-news-user_id" ON public.news USING btree (user_id);
 &   DROP INDEX public."idx-news-user_id";
       public            postgres    false    345            �           1259    27489    idx-notice-organization_id    INDEX     Z   CREATE INDEX "idx-notice-organization_id" ON public.notice USING btree (organization_id);
 0   DROP INDEX public."idx-notice-organization_id";
       public            postgres    false    277            }           1259    27483    idx-notice-subdivision_id    INDEX     U   CREATE INDEX "idx-notice-subdivision_id" ON public.msu USING btree (subdivision_id);
 /   DROP INDEX public."idx-notice-subdivision_id";
       public            postgres    false    275            �           1259    27477    idx-notice-user_id    INDEX     J   CREATE INDEX "idx-notice-user_id" ON public.notice USING btree (user_id);
 (   DROP INDEX public."idx-notice-user_id";
       public            postgres    false    277            �           1259    27525    idx-oper_rasp-organization_id    INDEX     `   CREATE INDEX "idx-oper_rasp-organization_id" ON public.oper_rasp USING btree (organization_id);
 3   DROP INDEX public."idx-oper_rasp-organization_id";
       public            postgres    false    279            �           1259    27531    idx-oper_rasp-user_id    INDEX     P   CREATE INDEX "idx-oper_rasp-user_id" ON public.oper_rasp USING btree (user_id);
 +   DROP INDEX public."idx-oper_rasp-user_id";
       public            postgres    false    279            �           1259    27585 #   idx-oper_rasp_file-oper_rasp_isp_id    INDEX     l   CREATE INDEX "idx-oper_rasp_file-oper_rasp_isp_id" ON public.oper_rasp_file USING btree (oper_rasp_isp_id);
 9   DROP INDEX public."idx-oper_rasp_file-oper_rasp_isp_id";
       public            postgres    false    281            �           1259    27609     idx-oper_rasp_isp-agreed_user_id    INDEX     f   CREATE INDEX "idx-oper_rasp_isp-agreed_user_id" ON public.oper_rasp_isp USING btree (agreed_user_id);
 6   DROP INDEX public."idx-oper_rasp_isp-agreed_user_id";
       public            postgres    false    283            �           1259    27603    idx-oper_rasp_isp-isp_user_id    INDEX     `   CREATE INDEX "idx-oper_rasp_isp-isp_user_id" ON public.oper_rasp_isp USING btree (isp_user_id);
 3   DROP INDEX public."idx-oper_rasp_isp-isp_user_id";
       public            postgres    false    283            �           1259    27591    idx-oper_rasp_isp-oper_rasp_id    INDEX     b   CREATE INDEX "idx-oper_rasp_isp-oper_rasp_id" ON public.oper_rasp_isp USING btree (oper_rasp_id);
 4   DROP INDEX public."idx-oper_rasp_isp-oper_rasp_id";
       public            postgres    false    283            �           1259    27597 "   idx-oper_rasp_isp-oper_rasp_sam_id    INDEX     j   CREATE INDEX "idx-oper_rasp_isp-oper_rasp_sam_id" ON public.oper_rasp_isp USING btree (oper_rasp_sam_id);
 8   DROP INDEX public."idx-oper_rasp_isp-oper_rasp_sam_id";
       public            postgres    false    283            �           1259    27615    idx-oper_rasp_sam-oper_rasp_id    INDEX     b   CREATE INDEX "idx-oper_rasp_sam-oper_rasp_id" ON public.oper_rasp_sam USING btree (oper_rasp_id);
 4   DROP INDEX public."idx-oper_rasp_sam-oper_rasp_id";
       public            postgres    false    285            �           1259    27549    idx-order-apply_shch_user_id    INDEX     `   CREATE INDEX "idx-order-apply_shch_user_id" ON public."order" USING btree (apply_shch_user_id);
 2   DROP INDEX public."idx-order-apply_shch_user_id";
       public            postgres    false    289            �           1259    27567    idx-order-card_id    INDEX     J   CREATE INDEX "idx-order-card_id" ON public."order" USING btree (card_id);
 '   DROP INDEX public."idx-order-card_id";
       public            postgres    false    289            �           1259    27573    idx-order-organization_id    INDEX     Z   CREATE INDEX "idx-order-organization_id" ON public."order" USING btree (organization_id);
 /   DROP INDEX public."idx-order-organization_id";
       public            postgres    false    289            �           1259    27555    idx-order-shchd_off_user_id    INDEX     ^   CREATE INDEX "idx-order-shchd_off_user_id" ON public."order" USING btree (shchd_off_user_id);
 1   DROP INDEX public."idx-order-shchd_off_user_id";
       public            postgres    false    289            �           1259    27537    idx-order-shchd_on_user_id    INDEX     \   CREATE INDEX "idx-order-shchd_on_user_id" ON public."order" USING btree (shchd_on_user_id);
 0   DROP INDEX public."idx-order-shchd_on_user_id";
       public            postgres    false    289            �           1259    27561    idx-order-shns_off_user_id    INDEX     \   CREATE INDEX "idx-order-shns_off_user_id" ON public."order" USING btree (shns_off_user_id);
 0   DROP INDEX public."idx-order-shns_off_user_id";
       public            postgres    false    289            �           1259    27543    idx-order-shns_on_user_id    INDEX     Z   CREATE INDEX "idx-order-shns_on_user_id" ON public."order" USING btree (shns_on_user_id);
 /   DROP INDEX public."idx-order-shns_on_user_id";
       public            postgres    false    289            �           1259    27579    idx-order-station_id    INDEX     P   CREATE INDEX "idx-order-station_id" ON public."order" USING btree (station_id);
 *   DROP INDEX public."idx-order-station_id";
       public            postgres    false    289            �           1259    27033    idx-organization-user_id    INDEX     V   CREATE INDEX "idx-organization-user_id" ON public.organization USING btree (user_id);
 .   DROP INDEX public."idx-organization-user_id";
       public            postgres    false    206            �           1259    27627    idx-ors-station_id    INDEX     J   CREATE INDEX "idx-ors-station_id" ON public.ors USING btree (station_id);
 (   DROP INDEX public."idx-ors-station_id";
       public            postgres    false    291            �           1259    27621    idx-ors-subdivision_id    INDEX     R   CREATE INDEX "idx-ors-subdivision_id" ON public.ors USING btree (subdivision_id);
 ,   DROP INDEX public."idx-ors-subdivision_id";
       public            postgres    false    291            �           1259    27639    idx-otkl-organization_id    INDEX     V   CREATE INDEX "idx-otkl-organization_id" ON public.otkl USING btree (organization_id);
 .   DROP INDEX public."idx-otkl-organization_id";
       public            postgres    false    295            �           1259    27633    idx-otkl-station_id    INDEX     L   CREATE INDEX "idx-otkl-station_id" ON public.otkl USING btree (station_id);
 )   DROP INDEX public."idx-otkl-station_id";
       public            postgres    false    295            �           1259    27651    idx-otkl-transfer_user_id    INDEX     X   CREATE INDEX "idx-otkl-transfer_user_id" ON public.otkl USING btree (transfer_user_id);
 /   DROP INDEX public."idx-otkl-transfer_user_id";
       public            postgres    false    295            �           1259    27645    idx-otkl-user_id    INDEX     F   CREATE INDEX "idx-otkl-user_id" ON public.otkl USING btree (user_id);
 &   DROP INDEX public."idx-otkl-user_id";
       public            postgres    false    295            �           1259    27657    idx-plan-organization_id    INDEX     V   CREATE INDEX "idx-plan-organization_id" ON public.plan USING btree (organization_id);
 .   DROP INDEX public."idx-plan-organization_id";
       public            postgres    false    297            �           1259    27681    idx-rc-station_id    INDEX     H   CREATE INDEX "idx-rc-station_id" ON public.rc USING btree (station_id);
 '   DROP INDEX public."idx-rc-station_id";
       public            postgres    false    305            �           1259    27687    idx-rework-organization_id    INDEX     Z   CREATE INDEX "idx-rework-organization_id" ON public.rework USING btree (organization_id);
 0   DROP INDEX public."idx-rework-organization_id";
       public            postgres    false    307            �           1259    27693    idx-rework-user_id    INDEX     J   CREATE INDEX "idx-rework-user_id" ON public.rework USING btree (user_id);
 (   DROP INDEX public."idx-rework-user_id";
       public            postgres    false    307            �           1259    27729    idx-sam-organization_id    INDEX     T   CREATE INDEX "idx-sam-organization_id" ON public.sam USING btree (organization_id);
 -   DROP INDEX public."idx-sam-organization_id";
       public            postgres    false    309            �           1259    27711    idx-sam-responsible_user_id    INDEX     \   CREATE INDEX "idx-sam-responsible_user_id" ON public.sam USING btree (responsible_user_id);
 1   DROP INDEX public."idx-sam-responsible_user_id";
       public            postgres    false    309            �           1259    27723    idx-sam-sam_category_id    INDEX     T   CREATE INDEX "idx-sam-sam_category_id" ON public.sam USING btree (sam_category_id);
 -   DROP INDEX public."idx-sam-sam_category_id";
       public            postgres    false    309            �           1259    27699    idx-sam-sam_from_id    INDEX     L   CREATE INDEX "idx-sam-sam_from_id" ON public.sam USING btree (sam_from_id);
 )   DROP INDEX public."idx-sam-sam_from_id";
       public            postgres    false    309            �           1259    27735    idx-sam-station_id    INDEX     J   CREATE INDEX "idx-sam-station_id" ON public.sam USING btree (station_id);
 (   DROP INDEX public."idx-sam-station_id";
       public            postgres    false    309            �           1259    27705    idx-sam-subdivision_id    INDEX     R   CREATE INDEX "idx-sam-subdivision_id" ON public.sam USING btree (subdivision_id);
 ,   DROP INDEX public."idx-sam-subdivision_id";
       public            postgres    false    309            �           1259    27717    idx-sam-user_id    INDEX     D   CREATE INDEX "idx-sam-user_id" ON public.sam USING btree (user_id);
 %   DROP INDEX public."idx-sam-user_id";
       public            postgres    false    309            �           1259    27747    idx-service-organization_id    INDEX     \   CREATE INDEX "idx-service-organization_id" ON public.service USING btree (organization_id);
 1   DROP INDEX public."idx-service-organization_id";
       public            postgres    false    315            �           1259    27771 "   idx-social_inspect-organization_id    INDEX     j   CREATE INDEX "idx-social_inspect-organization_id" ON public.social_inspect USING btree (organization_id);
 8   DROP INDEX public."idx-social_inspect-organization_id";
       public            postgres    false    317            �           1259    27759    idx-social_inspect-service_id    INDEX     `   CREATE INDEX "idx-social_inspect-service_id" ON public.social_inspect USING btree (service_id);
 3   DROP INDEX public."idx-social_inspect-service_id";
       public            postgres    false    317            �           1259    27753    idx-social_inspect-station_id    INDEX     `   CREATE INDEX "idx-social_inspect-station_id" ON public.social_inspect USING btree (station_id);
 3   DROP INDEX public."idx-social_inspect-station_id";
       public            postgres    false    317            �           1259    27765    idx-social_inspect-user_id    INDEX     Z   CREATE INDEX "idx-social_inspect-user_id" ON public.social_inspect USING btree (user_id);
 0   DROP INDEX public."idx-social_inspect-user_id";
       public            postgres    false    317            �           1259    27741    idx-spr_auto-organization_id    INDEX     ^   CREATE INDEX "idx-spr_auto-organization_id" ON public.spr_auto USING btree (organization_id);
 2   DROP INDEX public."idx-spr_auto-organization_id";
       public            postgres    false    319            �           1259    27843    idx-spr_driver-user_id    INDEX     R   CREATE INDEX "idx-spr_driver-user_id" ON public.spr_driver USING btree (user_id);
 ,   DROP INDEX public."idx-spr_driver-user_id";
       public            postgres    false    341            �           1259    27807    idx-spr_electro-organization_id    INDEX     d   CREATE INDEX "idx-spr_electro-organization_id" ON public.spr_electro USING btree (organization_id);
 5   DROP INDEX public."idx-spr_electro-organization_id";
       public            postgres    false    323            �           1259    27795 "   idx-spr_electro-spr_electro_obj_id    INDEX     j   CREATE INDEX "idx-spr_electro-spr_electro_obj_id" ON public.spr_electro USING btree (spr_electro_obj_id);
 8   DROP INDEX public."idx-spr_electro-spr_electro_obj_id";
       public            postgres    false    323            �           1259    27801 $   idx-spr_electro-spr_electro_trans_id    INDEX     n   CREATE INDEX "idx-spr_electro-spr_electro_trans_id" ON public.spr_electro USING btree (spr_electro_trans_id);
 :   DROP INDEX public."idx-spr_electro-spr_electro_trans_id";
       public            postgres    false    323            �           1259    27789 #   idx-spr_electro-spr_electro_type_id    INDEX     l   CREATE INDEX "idx-spr_electro-spr_electro_type_id" ON public.spr_electro USING btree (spr_electro_type_id);
 9   DROP INDEX public."idx-spr_electro-spr_electro_type_id";
       public            postgres    false    323            �           1259    27783    idx-spr_electro-subdivision_id    INDEX     b   CREATE INDEX "idx-spr_electro-subdivision_id" ON public.spr_electro USING btree (subdivision_id);
 4   DROP INDEX public."idx-spr_electro-subdivision_id";
       public            postgres    false    323            �           1259    27777 #   idx-spr_electro_obj-organization_id    INDEX     l   CREATE INDEX "idx-spr_electro_obj-organization_id" ON public.spr_electro_obj USING btree (organization_id);
 9   DROP INDEX public."idx-spr_electro_obj-organization_id";
       public            postgres    false    325            �           1259    27819    idx-spr_spt-spr_balance_id    INDEX     Z   CREATE INDEX "idx-spr_spt-spr_balance_id" ON public.spr_spt USING btree (spr_balance_id);
 0   DROP INDEX public."idx-spr_spt-spr_balance_id";
       public            postgres    false    335            �           1259    27813    idx-spr_spt-spr_class_id    INDEX     V   CREATE INDEX "idx-spr_spt-spr_class_id" ON public.spr_spt USING btree (spr_class_id);
 .   DROP INDEX public."idx-spr_spt-spr_class_id";
       public            postgres    false    335            �           1259    27831    idx-spr_spt-spr_spt_system_id    INDEX     `   CREATE INDEX "idx-spr_spt-spr_spt_system_id" ON public.spr_spt USING btree (spr_spt_system_id);
 3   DROP INDEX public."idx-spr_spt-spr_spt_system_id";
       public            postgres    false    335            �           1259    27825    idx-spr_spt-spr_spt_type_id    INDEX     \   CREATE INDEX "idx-spr_spt-spr_spt_type_id" ON public.spr_spt USING btree (spr_spt_type_id);
 1   DROP INDEX public."idx-spr_spt-spr_spt_type_id";
       public            postgres    false    335            �           1259    27837    idx-spr_spt-station_id    INDEX     R   CREATE INDEX "idx-spr_spt-station_id" ON public.spr_spt USING btree (station_id);
 ,   DROP INDEX public."idx-spr_spt-station_id";
       public            postgres    false    335            �           1259    27093    idx-station-organization_id    INDEX     \   CREATE INDEX "idx-station-organization_id" ON public.station USING btree (organization_id);
 1   DROP INDEX public."idx-station-organization_id";
       public            postgres    false    216            �           1259    27099    idx-station-subdivision_id    INDEX     Z   CREATE INDEX "idx-station-subdivision_id" ON public.station USING btree (subdivision_id);
 0   DROP INDEX public."idx-station-subdivision_id";
       public            postgres    false    216            �           1259    27081 "   idx-station_subdivision-station_id    INDEX     j   CREATE INDEX "idx-station_subdivision-station_id" ON public.station_subdivision USING btree (station_id);
 8   DROP INDEX public."idx-station_subdivision-station_id";
       public            postgres    false    217            �           1259    27087 &   idx-station_subdivision-subdivision_id    INDEX     r   CREATE INDEX "idx-station_subdivision-subdivision_id" ON public.station_subdivision USING btree (subdivision_id);
 <   DROP INDEX public."idx-station_subdivision-subdivision_id";
       public            postgres    false    217            �           1259    27045    idx-subdivision-organization_id    INDEX     d   CREATE INDEX "idx-subdivision-organization_id" ON public.subdivision USING btree (organization_id);
 5   DROP INDEX public."idx-subdivision-organization_id";
       public            postgres    false    208            �           1259    27039    idx-subdivision-user_id    INDEX     T   CREATE INDEX "idx-subdivision-user_id" ON public.subdivision USING btree (user_id);
 -   DROP INDEX public."idx-subdivision-user_id";
       public            postgres    false    208            �           1259    27027    idx-user-organization_id    INDEX     X   CREATE INDEX "idx-user-organization_id" ON public."user" USING btree (organization_id);
 .   DROP INDEX public."idx-user-organization_id";
       public            postgres    false    204            �           1259    27021    idx-user-subdivision_id    INDEX     V   CREATE INDEX "idx-user-subdivision_id" ON public."user" USING btree (subdivision_id);
 -   DROP INDEX public."idx-user-subdivision_id";
       public            postgres    false    204                       1259    27123    idx-warning-arm_user_id    INDEX     T   CREATE INDEX "idx-warning-arm_user_id" ON public.warning USING btree (arm_user_id);
 -   DROP INDEX public."idx-warning-arm_user_id";
       public            postgres    false    229                       1259    27129    idx-warning-organization_id    INDEX     \   CREATE INDEX "idx-warning-organization_id" ON public.warning USING btree (organization_id);
 1   DROP INDEX public."idx-warning-organization_id";
       public            postgres    false    229                       1259    27111    idx-warning-station_id    INDEX     R   CREATE INDEX "idx-warning-station_id" ON public.warning USING btree (station_id);
 ,   DROP INDEX public."idx-warning-station_id";
       public            postgres    false    229                       1259    27117    idx-warning-user_id    INDEX     L   CREATE INDEX "idx-warning-user_id" ON public.warning USING btree (user_id);
 )   DROP INDEX public."idx-warning-user_id";
       public            postgres    false    229            
           1259    27135    idx-window-transfer_user_id    INDEX     ^   CREATE INDEX "idx-window-transfer_user_id" ON public."window" USING btree (transfer_user_id);
 1   DROP INDEX public."idx-window-transfer_user_id";
       public            postgres    false    225                       1259    27141    idx-window-user_id    INDEX     L   CREATE INDEX "idx-window-user_id" ON public."window" USING btree (user_id);
 (   DROP INDEX public."idx-window-user_id";
       public            postgres    false    225                       1259    27189     idx-windowapplication-station_id    INDEX     f   CREATE INDEX "idx-windowapplication-station_id" ON public.windowapplication USING btree (station_id);
 6   DROP INDEX public."idx-windowapplication-station_id";
       public            postgres    false    227                       1259    27147    idx-work-organization_id    INDEX     V   CREATE INDEX "idx-work-organization_id" ON public.work USING btree (organization_id);
 .   DROP INDEX public."idx-work-organization_id";
       public            postgres    false    223                       2606    27202    auto_list fk-auto_list-auto_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.auto_list
    ADD CONSTRAINT "fk-auto_list-auto_id" FOREIGN KEY (auto_id) REFERENCES public.spr_auto(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.auto_list DROP CONSTRAINT "fk-auto_list-auto_id";
       public          postgres    false    319    3543    233                        2606    27208 &   auto_list fk-auto_list-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.auto_list
    ADD CONSTRAINT "fk-auto_list-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 R   ALTER TABLE ONLY public.auto_list DROP CONSTRAINT "fk-auto_list-organization_id";
       public          postgres    false    233    3306    206                       2606    27196    auto_list fk-auto_list-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.auto_list
    ADD CONSTRAINT "fk-auto_list-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.auto_list DROP CONSTRAINT "fk-auto_list-user_id";
       public          postgres    false    3301    233    204                       2606    27178 &   autotransport fk-autotransport-auto_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.autotransport
    ADD CONSTRAINT "fk-autotransport-auto_id" FOREIGN KEY (auto_id) REFERENCES public.spr_auto(id) ON DELETE CASCADE;
 R   ALTER TABLE ONLY public.autotransport DROP CONSTRAINT "fk-autotransport-auto_id";
       public          postgres    false    319    231    3543                       2606    27166 .   autotransport fk-autotransport-contact_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.autotransport
    ADD CONSTRAINT "fk-autotransport-contact_user_id" FOREIGN KEY (contact_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 Z   ALTER TABLE ONLY public.autotransport DROP CONSTRAINT "fk-autotransport-contact_user_id";
       public          postgres    false    204    231    3301                       2606    27184 -   autotransport fk-autotransport-driver_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.autotransport
    ADD CONSTRAINT "fk-autotransport-driver_user_id" FOREIGN KEY (driver_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.autotransport DROP CONSTRAINT "fk-autotransport-driver_user_id";
       public          postgres    false    204    3301    231                       2606    27154 .   autotransport fk-autotransport-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.autotransport
    ADD CONSTRAINT "fk-autotransport-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 Z   ALTER TABLE ONLY public.autotransport DROP CONSTRAINT "fk-autotransport-organization_id";
       public          postgres    false    206    231    3306                       2606    27160 -   autotransport fk-autotransport-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.autotransport
    ADD CONSTRAINT "fk-autotransport-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.autotransport DROP CONSTRAINT "fk-autotransport-subdivision_id";
       public          postgres    false    3310    231    208                       2606    27172 &   autotransport fk-autotransport-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.autotransport
    ADD CONSTRAINT "fk-autotransport-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 R   ALTER TABLE ONLY public.autotransport DROP CONSTRAINT "fk-autotransport-user_id";
       public          postgres    false    231    3301    204            "           2606    27220 %   briefing fk-briefing-employee_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.briefing
    ADD CONSTRAINT "fk-briefing-employee_user_id" FOREIGN KEY (employee_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 Q   ALTER TABLE ONLY public.briefing DROP CONSTRAINT "fk-briefing-employee_user_id";
       public          postgres    false    3301    237    204            !           2606    27214 '   briefing fk-briefing-instructor_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.briefing
    ADD CONSTRAINT "fk-briefing-instructor_user_id" FOREIGN KEY (instructor_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 S   ALTER TABLE ONLY public.briefing DROP CONSTRAINT "fk-briefing-instructor_user_id";
       public          postgres    false    204    237    3301            #           2606    27226 $   category fk-category-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.category
    ADD CONSTRAINT "fk-category-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 P   ALTER TABLE ONLY public.category DROP CONSTRAINT "fk-category-organization_id";
       public          postgres    false    3306    206    239            $           2606    27232    category fk-category-otdel_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.category
    ADD CONSTRAINT "fk-category-otdel_id" FOREIGN KEY (otdel_id) REFERENCES public.otdel(id) ON DELETE CASCADE;
 I   ALTER TABLE ONLY public.category DROP CONSTRAINT "fk-category-otdel_id";
       public          postgres    false    3493    293    239            %           2606    27238 "   contact fk-contact-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.contact
    ADD CONSTRAINT "fk-contact-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.contact DROP CONSTRAINT "fk-contact-organization_id";
       public          postgres    false    241    3306    206            &           2606    27244    contact fk-contact-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.contact
    ADD CONSTRAINT "fk-contact-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public.contact DROP CONSTRAINT "fk-contact-user_id";
       public          postgres    false    3301    204    241            n           2606    27676 4   contractor_reestr fk-contractor_reestr-contractor_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.contractor_reestr
    ADD CONSTRAINT "fk-contractor_reestr-contractor_id" FOREIGN KEY (contractor_id) REFERENCES public.contractor(id) ON DELETE CASCADE;
 `   ALTER TABLE ONLY public.contractor_reestr DROP CONSTRAINT "fk-contractor_reestr-contractor_id";
       public          postgres    false    3506    301    303            m           2606    27670 6   contractor_reestr fk-contractor_reestr-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.contractor_reestr
    ADD CONSTRAINT "fk-contractor_reestr-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 b   ALTER TABLE ONLY public.contractor_reestr DROP CONSTRAINT "fk-contractor_reestr-organization_id";
       public          postgres    false    303    206    3306            l           2606    27664 1   contractor_reestr fk-contractor_reestr-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.contractor_reestr
    ADD CONSTRAINT "fk-contractor_reestr-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 ]   ALTER TABLE ONLY public.contractor_reestr DROP CONSTRAINT "fk-contractor_reestr-station_id";
       public          postgres    false    303    3324    216                       2606    27106    dga fk-dga-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.dga
    ADD CONSTRAINT "fk-dga-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public.dga DROP CONSTRAINT "fk-dga-organization_id";
       public          postgres    false    221    206    3306                       2606    27052 $   dga_list fk-dga_list-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.dga_list
    ADD CONSTRAINT "fk-dga_list-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 P   ALTER TABLE ONLY public.dga_list DROP CONSTRAINT "fk-dga_list-organization_id";
       public          postgres    false    219    3306    206            (           2606    27256     document fk-document-category_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.document
    ADD CONSTRAINT "fk-document-category_id" FOREIGN KEY (category_id) REFERENCES public.category(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.document DROP CONSTRAINT "fk-document-category_id";
       public          postgres    false    3371    239    243            )           2606    27262    document fk-document-otdel_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.document
    ADD CONSTRAINT "fk-document-otdel_id" FOREIGN KEY (otdel_id) REFERENCES public.otdel(id) ON DELETE CASCADE;
 I   ALTER TABLE ONLY public.document DROP CONSTRAINT "fk-document-otdel_id";
       public          postgres    false    3493    293    243            '           2606    27250    document fk-document-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.document
    ADD CONSTRAINT "fk-document-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 H   ALTER TABLE ONLY public.document DROP CONSTRAINT "fk-document-user_id";
       public          postgres    false    204    3301    243            +           2606    27274    fail fk-fail-fail_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.fail
    ADD CONSTRAINT "fk-fail-fail_user_id" FOREIGN KEY (fail_user_id) REFERENCES public.fail_user(id) ON DELETE CASCADE;
 E   ALTER TABLE ONLY public.fail DROP CONSTRAINT "fk-fail-fail_user_id";
       public          postgres    false    3579    245    343            *           2606    27268    fail fk-fail-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.fail
    ADD CONSTRAINT "fk-fail-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 H   ALTER TABLE ONLY public.fail DROP CONSTRAINT "fk-fail-organization_id";
       public          postgres    false    245    206    3306            /           2606    27298    fail fk-fail-service_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.fail
    ADD CONSTRAINT "fk-fail-service_id" FOREIGN KEY (service_id) REFERENCES public.service(id) ON DELETE CASCADE;
 C   ALTER TABLE ONLY public.fail DROP CONSTRAINT "fk-fail-service_id";
       public          postgres    false    315    245    3534            ,           2606    27280    fail fk-fail-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.fail
    ADD CONSTRAINT "fk-fail-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 C   ALTER TABLE ONLY public.fail DROP CONSTRAINT "fk-fail-station_id";
       public          postgres    false    245    216    3324            .           2606    27292    fail fk-fail-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.fail
    ADD CONSTRAINT "fk-fail-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 G   ALTER TABLE ONLY public.fail DROP CONSTRAINT "fk-fail-subdivision_id";
       public          postgres    false    245    3310    208            -           2606    27286    fail fk-fail-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.fail
    ADD CONSTRAINT "fk-fail-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 @   ALTER TABLE ONLY public.fail DROP CONSTRAINT "fk-fail-user_id";
       public          postgres    false    204    245    3301            �           2606    27856    fail_user fk-fail_user-fail_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.fail_user
    ADD CONSTRAINT "fk-fail_user-fail_id" FOREIGN KEY (fail_id) REFERENCES public.fail(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.fail_user DROP CONSTRAINT "fk-fail_user-fail_id";
       public          postgres    false    3384    245    343            �           2606    27850    fail_user fk-fail_user-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.fail_user
    ADD CONSTRAINT "fk-fail_user-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.fail_user DROP CONSTRAINT "fk-fail_user-user_id";
       public          postgres    false    343    204    3301            0           2606    27304 $   incoming fk-incoming-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.incoming
    ADD CONSTRAINT "fk-incoming-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 P   ALTER TABLE ONLY public.incoming DROP CONSTRAINT "fk-incoming-organization_id";
       public          postgres    false    206    3306    247            1           2606    27346 (   incoming_sam fk-incoming_sam-isp_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.incoming_sam
    ADD CONSTRAINT "fk-incoming_sam-isp_user_id" FOREIGN KEY (isp_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 T   ALTER TABLE ONLY public.incoming_sam DROP CONSTRAINT "fk-incoming_sam-isp_user_id";
       public          postgres    false    249    3301    204            2           2606    27310 2   journal_electro fk-journal_electro-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_electro
    ADD CONSTRAINT "fk-journal_electro-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 ^   ALTER TABLE ONLY public.journal_electro DROP CONSTRAINT "fk-journal_electro-organization_id";
       public          postgres    false    251    3306    206            3           2606    27316 1   journal_electro fk-journal_electro-spr_electro_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_electro
    ADD CONSTRAINT "fk-journal_electro-spr_electro_id" FOREIGN KEY (spr_electro_id) REFERENCES public.spr_electro(id) ON DELETE CASCADE;
 ]   ALTER TABLE ONLY public.journal_electro DROP CONSTRAINT "fk-journal_electro-spr_electro_id";
       public          postgres    false    3552    323    251            4           2606    27322 *   journal_electro fk-journal_electro-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_electro
    ADD CONSTRAINT "fk-journal_electro-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 V   ALTER TABLE ONLY public.journal_electro DROP CONSTRAINT "fk-journal_electro-user_id";
       public          postgres    false    251    204    3301            5           2606    27328 ,   journal_izol fk-journal_izol-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_izol
    ADD CONSTRAINT "fk-journal_izol-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 X   ALTER TABLE ONLY public.journal_izol DROP CONSTRAINT "fk-journal_izol-organization_id";
       public          postgres    false    253    206    3306            6           2606    27334 )   journal_izol fk-journal_izol-shns_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_izol
    ADD CONSTRAINT "fk-journal_izol-shns_user_id" FOREIGN KEY (shns_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 U   ALTER TABLE ONLY public.journal_izol DROP CONSTRAINT "fk-journal_izol-shns_user_id";
       public          postgres    false    204    3301    253            7           2606    27340 '   journal_izol fk-journal_izol-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_izol
    ADD CONSTRAINT "fk-journal_izol-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 S   ALTER TABLE ONLY public.journal_izol DROP CONSTRAINT "fk-journal_izol-station_id";
       public          postgres    false    3324    253    216            8           2606    27352 <   journal_izol_control fk-journal_izol_control-journal_izol_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_izol_control
    ADD CONSTRAINT "fk-journal_izol_control-journal_izol_id" FOREIGN KEY (journal_izol_id) REFERENCES public.journal_izol(id) ON DELETE CASCADE;
 h   ALTER TABLE ONLY public.journal_izol_control DROP CONSTRAINT "fk-journal_izol_control-journal_izol_id";
       public          postgres    false    255    3406    253            ;           2606    27376 <   journal_revision_ot fk-journal_revision_ot-first_kom_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_revision_ot
    ADD CONSTRAINT "fk-journal_revision_ot-first_kom_user_id" FOREIGN KEY (first_kom_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 h   ALTER TABLE ONLY public.journal_revision_ot DROP CONSTRAINT "fk-journal_revision_ot-first_kom_user_id";
       public          postgres    false    257    204    3301            9           2606    27364 :   journal_revision_ot fk-journal_revision_ot-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_revision_ot
    ADD CONSTRAINT "fk-journal_revision_ot-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 f   ALTER TABLE ONLY public.journal_revision_ot DROP CONSTRAINT "fk-journal_revision_ot-organization_id";
       public          postgres    false    257    3306    206            :           2606    27370 =   journal_revision_ot fk-journal_revision_ot-second_kom_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_revision_ot
    ADD CONSTRAINT "fk-journal_revision_ot-second_kom_user_id" FOREIGN KEY (second_kom_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 i   ALTER TABLE ONLY public.journal_revision_ot DROP CONSTRAINT "fk-journal_revision_ot-second_kom_user_id";
       public          postgres    false    204    257    3301            =           2606    27388 5   journal_revision_ot fk-journal_revision_ot-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_revision_ot
    ADD CONSTRAINT "fk-journal_revision_ot-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 a   ALTER TABLE ONLY public.journal_revision_ot DROP CONSTRAINT "fk-journal_revision_ot-station_id";
       public          postgres    false    216    3324    257            <           2606    27382 9   journal_revision_ot fk-journal_revision_ot-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_revision_ot
    ADD CONSTRAINT "fk-journal_revision_ot-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 e   ALTER TABLE ONLY public.journal_revision_ot DROP CONSTRAINT "fk-journal_revision_ot-subdivision_id";
       public          postgres    false    3310    257    208            >           2606    27358 K   journal_revision_ot_file fk-journal_revision_ot_file-journal_revision_ot_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_revision_ot_file
    ADD CONSTRAINT "fk-journal_revision_ot_file-journal_revision_ot_id" FOREIGN KEY (journal_revision_ot_id) REFERENCES public.journal_revision_ot(id) ON DELETE CASCADE;
 w   ALTER TABLE ONLY public.journal_revision_ot_file DROP CONSTRAINT "fk-journal_revision_ot_file-journal_revision_ot_id";
       public          postgres    false    3416    259    257            ?           2606    27394 *   journal_siz fk-journal_siz-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_siz
    ADD CONSTRAINT "fk-journal_siz-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 V   ALTER TABLE ONLY public.journal_siz DROP CONSTRAINT "fk-journal_siz-organization_id";
       public          postgres    false    261    206    3306            A           2606    27406 %   journal_siz fk-journal_siz-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_siz
    ADD CONSTRAINT "fk-journal_siz-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 Q   ALTER TABLE ONLY public.journal_siz DROP CONSTRAINT "fk-journal_siz-station_id";
       public          postgres    false    216    3324    261            @           2606    27400 )   journal_siz fk-journal_siz-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_siz
    ADD CONSTRAINT "fk-journal_siz-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 U   ALTER TABLE ONLY public.journal_siz DROP CONSTRAINT "fk-journal_siz-subdivision_id";
       public          postgres    false    261    3310    208            C           2606    27442 *   journal_spt fk-journal_spt-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_spt
    ADD CONSTRAINT "fk-journal_spt-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 V   ALTER TABLE ONLY public.journal_spt DROP CONSTRAINT "fk-journal_spt-organization_id";
       public          postgres    false    3306    206    263            B           2606    27436 %   journal_spt fk-journal_spt-spr_spt_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.journal_spt
    ADD CONSTRAINT "fk-journal_spt-spr_spt_id" FOREIGN KEY (spr_spt_id) REFERENCES public.spr_spt(id) ON DELETE CASCADE;
 Q   ALTER TABLE ONLY public.journal_spt DROP CONSTRAINT "fk-journal_spt-spr_spt_id";
       public          postgres    false    335    3570    263            E           2606    27454     kasant fk-kasant-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.kasant
    ADD CONSTRAINT "fk-kasant-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.kasant DROP CONSTRAINT "fk-kasant-organization_id";
       public          postgres    false    3306    267    206            D           2606    27448    kasant fk-kasant-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.kasant
    ADD CONSTRAINT "fk-kasant-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 D   ALTER TABLE ONLY public.kasant DROP CONSTRAINT "fk-kasant-user_id";
       public          postgres    false    3301    204    267            H           2606    27424    kip fk-kip-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.kip
    ADD CONSTRAINT "fk-kip-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public.kip DROP CONSTRAINT "fk-kip-organization_id";
       public          postgres    false    206    269    3306            F           2606    27412    kip fk-kip-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.kip
    ADD CONSTRAINT "fk-kip-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 A   ALTER TABLE ONLY public.kip DROP CONSTRAINT "fk-kip-station_id";
       public          postgres    false    216    3324    269            I           2606    27430    kip fk-kip-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.kip
    ADD CONSTRAINT "fk-kip-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 E   ALTER TABLE ONLY public.kip DROP CONSTRAINT "fk-kip-subdivision_id";
       public          postgres    false    208    269    3310            G           2606    27418    kip fk-kip-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.kip
    ADD CONSTRAINT "fk-kip-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 >   ALTER TABLE ONLY public.kip DROP CONSTRAINT "fk-kip-user_id";
       public          postgres    false    3301    269    204            K           2606    27466 (   kip_device fk-kip_device-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.kip_device
    ADD CONSTRAINT "fk-kip_device-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 T   ALTER TABLE ONLY public.kip_device DROP CONSTRAINT "fk-kip_device-organization_id";
       public          postgres    false    3306    206    271            J           2606    27460 #   kip_device fk-kip_device-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.kip_device
    ADD CONSTRAINT "fk-kip_device-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 O   ALTER TABLE ONLY public.kip_device DROP CONSTRAINT "fk-kip_device-station_id";
       public          postgres    false    216    271    3324            L           2606    27472 '   kip_device fk-kip_device-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.kip_device
    ADD CONSTRAINT "fk-kip_device-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 S   ALTER TABLE ONLY public.kip_device DROP CONSTRAINT "fk-kip_device-subdivision_id";
       public          postgres    false    208    271    3310            M           2606    27496 *   ksotp_category fk-ksotp_category-parent_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.ksotp_category
    ADD CONSTRAINT "fk-ksotp_category-parent_id" FOREIGN KEY (parent_id) REFERENCES public.ksotp_category(id) ON DELETE CASCADE;
 V   ALTER TABLE ONLY public.ksotp_category DROP CONSTRAINT "fk-ksotp_category-parent_id";
       public          postgres    false    273    3448    273                       2606    27058 $   movement fk-movement-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.movement
    ADD CONSTRAINT "fk-movement-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 P   ALTER TABLE ONLY public.movement DROP CONSTRAINT "fk-movement-organization_id";
       public          postgres    false    206    212    3306                       2606    27064    movement fk-movement-status_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.movement
    ADD CONSTRAINT "fk-movement-status_id" FOREIGN KEY (status_id) REFERENCES public.status(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.movement DROP CONSTRAINT "fk-movement-status_id";
       public          postgres    false    3320    214    212            	           2606    27076 #   movement fk-movement-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.movement
    ADD CONSTRAINT "fk-movement-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 O   ALTER TABLE ONLY public.movement DROP CONSTRAINT "fk-movement-subdivision_id";
       public          postgres    false    3310    212    208                       2606    27070    movement fk-movement-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.movement
    ADD CONSTRAINT "fk-movement-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 H   ALTER TABLE ONLY public.movement DROP CONSTRAINT "fk-movement-user_id";
       public          postgres    false    212    204    3301            Q           2606    27520    msu fk-msu-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.msu
    ADD CONSTRAINT "fk-msu-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public.msu DROP CONSTRAINT "fk-msu-organization_id";
       public          postgres    false    275    206    3306            P           2606    27514    msu fk-msu-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.msu
    ADD CONSTRAINT "fk-msu-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 A   ALTER TABLE ONLY public.msu DROP CONSTRAINT "fk-msu-station_id";
       public          postgres    false    216    3324    275            O           2606    27508    msu fk-msu-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.msu
    ADD CONSTRAINT "fk-msu-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 E   ALTER TABLE ONLY public.msu DROP CONSTRAINT "fk-msu-subdivision_id";
       public          postgres    false    275    3310    208            N           2606    27502    msu fk-msu-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.msu
    ADD CONSTRAINT "fk-msu-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 >   ALTER TABLE ONLY public.msu DROP CONSTRAINT "fk-msu-user_id";
       public          postgres    false    204    275    3301            �           2606    27862    news fk-news-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.news
    ADD CONSTRAINT "fk-news-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 @   ALTER TABLE ONLY public.news DROP CONSTRAINT "fk-news-user_id";
       public          postgres    false    3301    204    345            T           2606    27490     notice fk-notice-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.notice
    ADD CONSTRAINT "fk-notice-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.notice DROP CONSTRAINT "fk-notice-organization_id";
       public          postgres    false    3306    277    206            S           2606    27484    notice fk-notice-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.notice
    ADD CONSTRAINT "fk-notice-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 K   ALTER TABLE ONLY public.notice DROP CONSTRAINT "fk-notice-subdivision_id";
       public          postgres    false    3310    277    208            R           2606    27478    notice fk-notice-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.notice
    ADD CONSTRAINT "fk-notice-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 D   ALTER TABLE ONLY public.notice DROP CONSTRAINT "fk-notice-user_id";
       public          postgres    false    3301    204    277            U           2606    27526 &   oper_rasp fk-oper_rasp-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.oper_rasp
    ADD CONSTRAINT "fk-oper_rasp-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 R   ALTER TABLE ONLY public.oper_rasp DROP CONSTRAINT "fk-oper_rasp-organization_id";
       public          postgres    false    3306    206    279            V           2606    27532    oper_rasp fk-oper_rasp-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.oper_rasp
    ADD CONSTRAINT "fk-oper_rasp-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.oper_rasp DROP CONSTRAINT "fk-oper_rasp-user_id";
       public          postgres    false    3301    204    279            W           2606    27586 1   oper_rasp_file fk-oper_rasp_file-oper_rasp_isp_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.oper_rasp_file
    ADD CONSTRAINT "fk-oper_rasp_file-oper_rasp_isp_id" FOREIGN KEY (oper_rasp_isp_id) REFERENCES public.oper_rasp_isp(id) ON DELETE CASCADE;
 ]   ALTER TABLE ONLY public.oper_rasp_file DROP CONSTRAINT "fk-oper_rasp_file-oper_rasp_isp_id";
       public          postgres    false    283    281    3472            [           2606    27610 -   oper_rasp_isp fk-oper_rasp_isp-agreed_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.oper_rasp_isp
    ADD CONSTRAINT "fk-oper_rasp_isp-agreed_user_id" FOREIGN KEY (agreed_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.oper_rasp_isp DROP CONSTRAINT "fk-oper_rasp_isp-agreed_user_id";
       public          postgres    false    3301    283    204            Z           2606    27604 *   oper_rasp_isp fk-oper_rasp_isp-isp_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.oper_rasp_isp
    ADD CONSTRAINT "fk-oper_rasp_isp-isp_user_id" FOREIGN KEY (isp_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 V   ALTER TABLE ONLY public.oper_rasp_isp DROP CONSTRAINT "fk-oper_rasp_isp-isp_user_id";
       public          postgres    false    3301    283    204            X           2606    27592 +   oper_rasp_isp fk-oper_rasp_isp-oper_rasp_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.oper_rasp_isp
    ADD CONSTRAINT "fk-oper_rasp_isp-oper_rasp_id" FOREIGN KEY (oper_rasp_id) REFERENCES public.oper_rasp(id) ON DELETE CASCADE;
 W   ALTER TABLE ONLY public.oper_rasp_isp DROP CONSTRAINT "fk-oper_rasp_isp-oper_rasp_id";
       public          postgres    false    3463    283    279            Y           2606    27598 /   oper_rasp_isp fk-oper_rasp_isp-oper_rasp_sam_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.oper_rasp_isp
    ADD CONSTRAINT "fk-oper_rasp_isp-oper_rasp_sam_id" FOREIGN KEY (oper_rasp_sam_id) REFERENCES public.oper_rasp_sam(id) ON DELETE CASCADE;
 [   ALTER TABLE ONLY public.oper_rasp_isp DROP CONSTRAINT "fk-oper_rasp_isp-oper_rasp_sam_id";
       public          postgres    false    3475    283    285            \           2606    27616 +   oper_rasp_sam fk-oper_rasp_sam-oper_rasp_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.oper_rasp_sam
    ADD CONSTRAINT "fk-oper_rasp_sam-oper_rasp_id" FOREIGN KEY (oper_rasp_id) REFERENCES public.oper_rasp(id) ON DELETE CASCADE;
 W   ALTER TABLE ONLY public.oper_rasp_sam DROP CONSTRAINT "fk-oper_rasp_sam-oper_rasp_id";
       public          postgres    false    279    285    3463            _           2606    27550 !   order fk-order-apply_shch_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public."order"
    ADD CONSTRAINT "fk-order-apply_shch_user_id" FOREIGN KEY (apply_shch_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 O   ALTER TABLE ONLY public."order" DROP CONSTRAINT "fk-order-apply_shch_user_id";
       public          postgres    false    3301    204    289            b           2606    27568    order fk-order-card_id    FK CONSTRAINT     �   ALTER TABLE ONLY public."order"
    ADD CONSTRAINT "fk-order-card_id" FOREIGN KEY (card_id) REFERENCES public.card(id) ON DELETE CASCADE;
 D   ALTER TABLE ONLY public."order" DROP CONSTRAINT "fk-order-card_id";
       public          postgres    false    265    3430    289            c           2606    27574    order fk-order-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public."order"
    ADD CONSTRAINT "fk-order-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public."order" DROP CONSTRAINT "fk-order-organization_id";
       public          postgres    false    206    289    3306            `           2606    27556     order fk-order-shchd_off_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public."order"
    ADD CONSTRAINT "fk-order-shchd_off_user_id" FOREIGN KEY (shchd_off_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public."order" DROP CONSTRAINT "fk-order-shchd_off_user_id";
       public          postgres    false    204    3301    289            ]           2606    27538    order fk-order-shchd_on_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public."order"
    ADD CONSTRAINT "fk-order-shchd_on_user_id" FOREIGN KEY (shchd_on_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 M   ALTER TABLE ONLY public."order" DROP CONSTRAINT "fk-order-shchd_on_user_id";
       public          postgres    false    289    204    3301            a           2606    27562    order fk-order-shns_off_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public."order"
    ADD CONSTRAINT "fk-order-shns_off_user_id" FOREIGN KEY (shns_off_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 M   ALTER TABLE ONLY public."order" DROP CONSTRAINT "fk-order-shns_off_user_id";
       public          postgres    false    204    3301    289            ^           2606    27544    order fk-order-shns_on_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public."order"
    ADD CONSTRAINT "fk-order-shns_on_user_id" FOREIGN KEY (shns_on_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public."order" DROP CONSTRAINT "fk-order-shns_on_user_id";
       public          postgres    false    289    204    3301            d           2606    27580    order fk-order-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public."order"
    ADD CONSTRAINT "fk-order-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 G   ALTER TABLE ONLY public."order" DROP CONSTRAINT "fk-order-station_id";
       public          postgres    false    3324    216    289                       2606    27034 $   organization fk-organization-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.organization
    ADD CONSTRAINT "fk-organization-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 P   ALTER TABLE ONLY public.organization DROP CONSTRAINT "fk-organization-user_id";
       public          postgres    false    204    206    3301            f           2606    27628    ors fk-ors-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.ors
    ADD CONSTRAINT "fk-ors-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 A   ALTER TABLE ONLY public.ors DROP CONSTRAINT "fk-ors-station_id";
       public          postgres    false    291    3324    216            e           2606    27622    ors fk-ors-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.ors
    ADD CONSTRAINT "fk-ors-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 E   ALTER TABLE ONLY public.ors DROP CONSTRAINT "fk-ors-subdivision_id";
       public          postgres    false    208    291    3310            h           2606    27640    otkl fk-otkl-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.otkl
    ADD CONSTRAINT "fk-otkl-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 H   ALTER TABLE ONLY public.otkl DROP CONSTRAINT "fk-otkl-organization_id";
       public          postgres    false    295    206    3306            g           2606    27634    otkl fk-otkl-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.otkl
    ADD CONSTRAINT "fk-otkl-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 C   ALTER TABLE ONLY public.otkl DROP CONSTRAINT "fk-otkl-station_id";
       public          postgres    false    295    216    3324            j           2606    27652    otkl fk-otkl-transfer_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.otkl
    ADD CONSTRAINT "fk-otkl-transfer_user_id" FOREIGN KEY (transfer_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 I   ALTER TABLE ONLY public.otkl DROP CONSTRAINT "fk-otkl-transfer_user_id";
       public          postgres    false    295    204    3301            i           2606    27646    otkl fk-otkl-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.otkl
    ADD CONSTRAINT "fk-otkl-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 @   ALTER TABLE ONLY public.otkl DROP CONSTRAINT "fk-otkl-user_id";
       public          postgres    false    204    3301    295            k           2606    27658    plan fk-plan-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.plan
    ADD CONSTRAINT "fk-plan-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 H   ALTER TABLE ONLY public.plan DROP CONSTRAINT "fk-plan-organization_id";
       public          postgres    false    297    3306    206            o           2606    27682    rc fk-rc-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.rc
    ADD CONSTRAINT "fk-rc-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 ?   ALTER TABLE ONLY public.rc DROP CONSTRAINT "fk-rc-station_id";
       public          postgres    false    3324    305    216            p           2606    27688     rework fk-rework-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.rework
    ADD CONSTRAINT "fk-rework-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.rework DROP CONSTRAINT "fk-rework-organization_id";
       public          postgres    false    206    3306    307            q           2606    27694    rework fk-rework-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.rework
    ADD CONSTRAINT "fk-rework-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 D   ALTER TABLE ONLY public.rework DROP CONSTRAINT "fk-rework-user_id";
       public          postgres    false    204    307    3301            w           2606    27730    sam fk-sam-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.sam
    ADD CONSTRAINT "fk-sam-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public.sam DROP CONSTRAINT "fk-sam-organization_id";
       public          postgres    false    309    206    3306            t           2606    27712    sam fk-sam-responsible_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.sam
    ADD CONSTRAINT "fk-sam-responsible_user_id" FOREIGN KEY (responsible_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.sam DROP CONSTRAINT "fk-sam-responsible_user_id";
       public          postgres    false    309    3301    204            v           2606    27724    sam fk-sam-sam_category_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.sam
    ADD CONSTRAINT "fk-sam-sam_category_id" FOREIGN KEY (sam_category_id) REFERENCES public.sam_category(id) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public.sam DROP CONSTRAINT "fk-sam-sam_category_id";
       public          postgres    false    311    3529    309            r           2606    27700    sam fk-sam-sam_from_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.sam
    ADD CONSTRAINT "fk-sam-sam_from_id" FOREIGN KEY (sam_from_id) REFERENCES public.sam_from(id) ON DELETE CASCADE;
 B   ALTER TABLE ONLY public.sam DROP CONSTRAINT "fk-sam-sam_from_id";
       public          postgres    false    313    309    3531            x           2606    27736    sam fk-sam-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.sam
    ADD CONSTRAINT "fk-sam-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 A   ALTER TABLE ONLY public.sam DROP CONSTRAINT "fk-sam-station_id";
       public          postgres    false    216    3324    309            s           2606    27706    sam fk-sam-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.sam
    ADD CONSTRAINT "fk-sam-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 E   ALTER TABLE ONLY public.sam DROP CONSTRAINT "fk-sam-subdivision_id";
       public          postgres    false    309    208    3310            u           2606    27718    sam fk-sam-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.sam
    ADD CONSTRAINT "fk-sam-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 >   ALTER TABLE ONLY public.sam DROP CONSTRAINT "fk-sam-user_id";
       public          postgres    false    204    309    3301            y           2606    27748 "   service fk-service-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.service
    ADD CONSTRAINT "fk-service-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.service DROP CONSTRAINT "fk-service-organization_id";
       public          postgres    false    3306    315    206            }           2606    27772 0   social_inspect fk-social_inspect-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.social_inspect
    ADD CONSTRAINT "fk-social_inspect-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 \   ALTER TABLE ONLY public.social_inspect DROP CONSTRAINT "fk-social_inspect-organization_id";
       public          postgres    false    206    317    3306            {           2606    27760 +   social_inspect fk-social_inspect-service_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.social_inspect
    ADD CONSTRAINT "fk-social_inspect-service_id" FOREIGN KEY (service_id) REFERENCES public.service(id) ON DELETE CASCADE;
 W   ALTER TABLE ONLY public.social_inspect DROP CONSTRAINT "fk-social_inspect-service_id";
       public          postgres    false    317    3534    315            z           2606    27754 +   social_inspect fk-social_inspect-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.social_inspect
    ADD CONSTRAINT "fk-social_inspect-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 W   ALTER TABLE ONLY public.social_inspect DROP CONSTRAINT "fk-social_inspect-station_id";
       public          postgres    false    317    216    3324            |           2606    27766 (   social_inspect fk-social_inspect-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.social_inspect
    ADD CONSTRAINT "fk-social_inspect-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 T   ALTER TABLE ONLY public.social_inspect DROP CONSTRAINT "fk-social_inspect-user_id";
       public          postgres    false    317    204    3301            ~           2606    27742 $   spr_auto fk-spr_auto-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_auto
    ADD CONSTRAINT "fk-spr_auto-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 P   ALTER TABLE ONLY public.spr_auto DROP CONSTRAINT "fk-spr_auto-organization_id";
       public          postgres    false    206    3306    319            �           2606    27844     spr_driver fk-spr_driver-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_driver
    ADD CONSTRAINT "fk-spr_driver-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.spr_driver DROP CONSTRAINT "fk-spr_driver-user_id";
       public          postgres    false    3301    204    341            �           2606    27808 *   spr_electro fk-spr_electro-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_electro
    ADD CONSTRAINT "fk-spr_electro-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 V   ALTER TABLE ONLY public.spr_electro DROP CONSTRAINT "fk-spr_electro-organization_id";
       public          postgres    false    323    3306    206            �           2606    27796 -   spr_electro fk-spr_electro-spr_electro_obj_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_electro
    ADD CONSTRAINT "fk-spr_electro-spr_electro_obj_id" FOREIGN KEY (spr_electro_obj_id) REFERENCES public.spr_electro_obj(id) ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.spr_electro DROP CONSTRAINT "fk-spr_electro-spr_electro_obj_id";
       public          postgres    false    3555    325    323            �           2606    27802 /   spr_electro fk-spr_electro-spr_electro_trans_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_electro
    ADD CONSTRAINT "fk-spr_electro-spr_electro_trans_id" FOREIGN KEY (spr_electro_trans_id) REFERENCES public.spr_electro_trans(id) ON DELETE CASCADE;
 [   ALTER TABLE ONLY public.spr_electro DROP CONSTRAINT "fk-spr_electro-spr_electro_trans_id";
       public          postgres    false    3557    327    323            �           2606    27790 .   spr_electro fk-spr_electro-spr_electro_type_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_electro
    ADD CONSTRAINT "fk-spr_electro-spr_electro_type_id" FOREIGN KEY (spr_electro_type_id) REFERENCES public.spr_electro_type(id) ON DELETE CASCADE;
 Z   ALTER TABLE ONLY public.spr_electro DROP CONSTRAINT "fk-spr_electro-spr_electro_type_id";
       public          postgres    false    3559    329    323                       2606    27784 )   spr_electro fk-spr_electro-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_electro
    ADD CONSTRAINT "fk-spr_electro-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 U   ALTER TABLE ONLY public.spr_electro DROP CONSTRAINT "fk-spr_electro-subdivision_id";
       public          postgres    false    323    3310    208            �           2606    27778 2   spr_electro_obj fk-spr_electro_obj-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_electro_obj
    ADD CONSTRAINT "fk-spr_electro_obj-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 ^   ALTER TABLE ONLY public.spr_electro_obj DROP CONSTRAINT "fk-spr_electro_obj-organization_id";
       public          postgres    false    206    325    3306            �           2606    27820 !   spr_spt fk-spr_spt-spr_balance_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_spt
    ADD CONSTRAINT "fk-spr_spt-spr_balance_id" FOREIGN KEY (spr_balance_id) REFERENCES public.spr_balance(id) ON DELETE CASCADE;
 M   ALTER TABLE ONLY public.spr_spt DROP CONSTRAINT "fk-spr_spt-spr_balance_id";
       public          postgres    false    3545    335    321            �           2606    27814    spr_spt fk-spr_spt-spr_class_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_spt
    ADD CONSTRAINT "fk-spr_spt-spr_class_id" FOREIGN KEY (spr_class_id) REFERENCES public.spr_class(id) ON DELETE CASCADE;
 K   ALTER TABLE ONLY public.spr_spt DROP CONSTRAINT "fk-spr_spt-spr_class_id";
       public          postgres    false    331    3561    335            �           2606    27832 $   spr_spt fk-spr_spt-spr_spt_system_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_spt
    ADD CONSTRAINT "fk-spr_spt-spr_spt_system_id" FOREIGN KEY (spr_spt_system_id) REFERENCES public.spr_spt_system(id) ON DELETE CASCADE;
 P   ALTER TABLE ONLY public.spr_spt DROP CONSTRAINT "fk-spr_spt-spr_spt_system_id";
       public          postgres    false    337    3572    335            �           2606    27826 "   spr_spt fk-spr_spt-spr_spt_type_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_spt
    ADD CONSTRAINT "fk-spr_spt-spr_spt_type_id" FOREIGN KEY (spr_spt_type_id) REFERENCES public.spr_spt_type(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.spr_spt DROP CONSTRAINT "fk-spr_spt-spr_spt_type_id";
       public          postgres    false    335    339    3574            �           2606    27838    spr_spt fk-spr_spt-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.spr_spt
    ADD CONSTRAINT "fk-spr_spt-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 I   ALTER TABLE ONLY public.spr_spt DROP CONSTRAINT "fk-spr_spt-station_id";
       public          postgres    false    216    335    3324            
           2606    27094 "   station fk-station-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.station
    ADD CONSTRAINT "fk-station-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.station DROP CONSTRAINT "fk-station-organization_id";
       public          postgres    false    3306    216    206                       2606    27100 !   station fk-station-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.station
    ADD CONSTRAINT "fk-station-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 M   ALTER TABLE ONLY public.station DROP CONSTRAINT "fk-station-subdivision_id";
       public          postgres    false    208    3310    216                       2606    27082 5   station_subdivision fk-station_subdivision-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.station_subdivision
    ADD CONSTRAINT "fk-station_subdivision-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 a   ALTER TABLE ONLY public.station_subdivision DROP CONSTRAINT "fk-station_subdivision-station_id";
       public          postgres    false    216    217    3324                       2606    27088 9   station_subdivision fk-station_subdivision-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.station_subdivision
    ADD CONSTRAINT "fk-station_subdivision-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 e   ALTER TABLE ONLY public.station_subdivision DROP CONSTRAINT "fk-station_subdivision-subdivision_id";
       public          postgres    false    217    208    3310                       2606    27046 *   subdivision fk-subdivision-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.subdivision
    ADD CONSTRAINT "fk-subdivision-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 V   ALTER TABLE ONLY public.subdivision DROP CONSTRAINT "fk-subdivision-organization_id";
       public          postgres    false    3306    206    208                       2606    27040 "   subdivision fk-subdivision-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.subdivision
    ADD CONSTRAINT "fk-subdivision-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.subdivision DROP CONSTRAINT "fk-subdivision-user_id";
       public          postgres    false    3301    204    208                       2606    27028    user fk-user-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT "fk-user-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public."user" DROP CONSTRAINT "fk-user-organization_id";
       public          postgres    false    3306    204    206                       2606    27022    user fk-user-subdivision_id    FK CONSTRAINT     �   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT "fk-user-subdivision_id" FOREIGN KEY (subdivision_id) REFERENCES public.subdivision(id) ON DELETE CASCADE;
 I   ALTER TABLE ONLY public."user" DROP CONSTRAINT "fk-user-subdivision_id";
       public          postgres    false    208    3310    204                       2606    27124    warning fk-warning-arm_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.warning
    ADD CONSTRAINT "fk-warning-arm_user_id" FOREIGN KEY (arm_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.warning DROP CONSTRAINT "fk-warning-arm_user_id";
       public          postgres    false    229    204    3301                       2606    27130 "   warning fk-warning-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.warning
    ADD CONSTRAINT "fk-warning-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.warning DROP CONSTRAINT "fk-warning-organization_id";
       public          postgres    false    229    206    3306                       2606    27112    warning fk-warning-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.warning
    ADD CONSTRAINT "fk-warning-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 I   ALTER TABLE ONLY public.warning DROP CONSTRAINT "fk-warning-station_id";
       public          postgres    false    3324    229    216                       2606    27118    warning fk-warning-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.warning
    ADD CONSTRAINT "fk-warning-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public.warning DROP CONSTRAINT "fk-warning-user_id";
       public          postgres    false    204    229    3301                       2606    27136 !   window fk-window-transfer_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public."window"
    ADD CONSTRAINT "fk-window-transfer_user_id" FOREIGN KEY (transfer_user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 O   ALTER TABLE ONLY public."window" DROP CONSTRAINT "fk-window-transfer_user_id";
       public          postgres    false    3301    225    204                       2606    27142    window fk-window-user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public."window"
    ADD CONSTRAINT "fk-window-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public."window" DROP CONSTRAINT "fk-window-user_id";
       public          postgres    false    204    225    3301                       2606    27190 1   windowapplication fk-windowapplication-station_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.windowapplication
    ADD CONSTRAINT "fk-windowapplication-station_id" FOREIGN KEY (station_id) REFERENCES public.station(id) ON DELETE CASCADE;
 ]   ALTER TABLE ONLY public.windowapplication DROP CONSTRAINT "fk-windowapplication-station_id";
       public          postgres    false    216    227    3324                       2606    27148    work fk-work-organization_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.work
    ADD CONSTRAINT "fk-work-organization_id" FOREIGN KEY (organization_id) REFERENCES public.organization(id) ON DELETE CASCADE;
 H   ALTER TABLE ONLY public.work DROP CONSTRAINT "fk-work-organization_id";
       public          postgres    false    206    223    3306            +      x������ � �      -      x������ � �      )      x������ � �      /      x������ � �      K      x������ � �      1      x������ � �      3      x������ � �      o      x������ � �      q      x������ � �            x������ � �            x������ � �      5      x������ � �      7      x������ � �      �      x������ � �      9      x������ � �      ;      x������ � �      =      x������ � �      ?      x������ � �      A      x������ � �      C      x������ � �      E      x������ � �      G      x������ � �      I      x������ � �      M      x������ � �      O      x������ � �      Q      x������ � �      S      x������ � �         �  x����n�*��>�W_��HqHŎc"��~�3�m�;��Z�Y00̰n��W���&���M-�|�QN$#T֙����>n	��)%hu>wڙ���l�����Ǯ�����=&��Y���Q�9� �6]ﴚugݻ�
��Փ����0�"jI���N3���;�������}�cAO�_ά�ǔSˎV��4Tg�-�5mc�n�?h+W�������}G�B}FZu�D�O�uׂ��<�Z3��gN]w��T��Z��Ú]9�JȺ�O�F3�䔵�?��1�٩q�[��P�!N+AC���h����az]`�F���N��I��\��I�[�U�K"���g՗B�\Yd�v}E*��E�!�m:"y�ץ����B����du��ԭ�4��u=��Íj������ֲ�51f~�B8��Q�Y��Y�Z^Ǭ�?��fwPA��Ћ�	�����'�Ȗ%SN��*����i��%���_դ��
��_ͽ$��Pz֥۸"8��d����JZ*)Y[���K��������r8�j�*�Z�SSqp��J�%%�.��XCH���\�8}_�Pz?7�6��������֝�7F(�������T�泎��VTR;_�Z)|=�*ne��"�w�E[�������;(�LH{�i=�EP0��\_TVl���i��p_�
�����P���Z�����9��T�{#���_t�7KՇ��N�jHqZ�5����~�L�]�'�Q\gu�0@�"P�D�!��+�h��w�δ����d���Ih��r����D�y�n+�g�F�4����>�O_Ӭ�<�P�U�$;�sز�9;�և'v��ƿ�<�Kkf��3��b)�-��@���'�*Iy���)B�߆�PR:o�"X��أd�  �����A�G�2���# ���pH�(�R%?w ߳��H*��!g�h�� s�� ���`�ƤHI��2&� Y�~/�������#ϛ}����G���xÿ�A:�>����3��|F}�.g3������dT�e= e��sp|�!-�Ͼ2 �l_��[��%һ+z B|�>�9ΈB��7�"u���_�/�s���A��H��8�`�#�˾��0�3�� �V�D�_��l�C�D��|���i$�X�E���߷���Y�k�            x������ � �      U      x������ � �      �      x������ � �      W      x������ � �      Y      x������ � �      [      x������ � �      ]      x������ � �      _      x������ � �      a      x������ � �      c      x������ � �         �  x���KN�0���)r ��8i�����U�����E�.Ӵ��G�0��$�u�da)RF����<�4��~̈J30}ZRn2�T����17�3�����
�7����ÿD���}3���[�_S���)}�Jt�����镊U CA������ I��;�H�Rz¦�{m��ZF-nA"$���g�,Ͱ��ި6=@����-����2 Z�Z��u��NB�
zG(}s�'��D�N�
="����	�J�TJ�K�;#��M��4�9Gƞc��QԑJs#�0�8t�#���\w�ѴU�(�*j'���Z�	*��*y8^Z�=�����5�s��Ua��-�^rCpc�ʬ���4��U�����p�L�H��{����ș�      e      x������ � �      g      x������ � �      i      x������ � �      k      x������ � �      m      x������ � �         �  x��V[N�P�����:�����$A�!�J-��*J�Z~*�!iR'8+������I�MZT	��Ǚ3g��E���<�<B�^�$r��<�<�K�D>��0�,������뿸�9%�d�9��ᕽ�����<��|���i5�,�%)_�g82J#~/ox��8MB�B���z)j?F��&e�*�TA���,sK�Чn�,d��f��Oi/�@-���&Fa1�Ԫ䬵ΩV�#>F��Gxu$�fp��h�+T��\��p8�Up�.F)E��_�=�����Z�-�C*�MxK��  3Kuz�|=H̕�BC���A.�G`�H,I'��3��䠐sm�����a�T��6Ơ�q]`� pt�w���`�	����@O$��y�rDn�U��"���3r��I5�z��F���
̒�^=��'��v�|��'��
a8P�yU���?� ~t��"^<.G��8'�PWm)�.#�s�"��U��ɧ��q�����&��i��Hb8��UK)�\ga�b��&8
We�:i�����l.�Us�|W�.������=������J����o����qD��g�n^��oU�3���"J�����i,̻%�!/����ݑ&I&i�^���o�-tP���Y}�7Æth��d���+&LI�=��f�E�,d�Z�-�B��^�v؝�u����q��]���+��^?"���5�\�7D�M�+��R�.�@ �:A5�dJ4��j����u[.���������T�c���Ak�JXD���x�qW���?�-���i�����
��2�B2(�#���J�O�i���PJ,�@e�<W� ����&Cs�m��|&<j;%�����SQ�]�r땋.kKhS���;�RW[�[�]���Q�"/�uEX}N��I�j}�aɖ ��*��� Ν�������H/)���qӾJ)�1��V� �a9R�1��ۺ
��|	Sz���� �ۖ�      s      x������ � �      u      x������ � �      w      x������ � �      y      x������ � �      {      x������ � �      }      x������ � �            x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �            x������ � �            x������ � �            x������ � �         �   x�3�44㼰�b�]6]�wa˅�.l�����?�΀ W�x�eQ��taǅ��]l�؍���l-��}������^l�츰S��za��~L�&`���[@�P���²1ՙ��-D�p�����6����b?�3��E@��]F��b���� ��V         �  x�u�M��F���)�0�q�U�[AQ|���xSA@�I*��Te+�T*{H.�n6;U����+��(팎��	4UOw����W���1��D=���N��R��̩�tE�ʍ�ձp���L	��%^�T�T������ �[jgbB�;�d�tdӆ�3���u}+"]�{��\�+{E�hgax	�	 p����)T����������[x�_���{�~��o����-��x�}<�0��MN��u��W\:�����uE��̉?����)v���Jc����غ��G���y0"m�;��"�P������r�1��*����%qwY�X+��6%�HBc��/�7?��ܫ���$j%
T�J�L�Wx�H�ҿ���#�~��t��A�����4���?��C�0b�nW'*����{�@�5XY;ߠP�Je���.�w�;T��^5�x9��se^r㜈�^G偗Z���pۭ��l�;ol,Sp�8K��ш�N{2�y�U�-������H�q�e`:���B?���a�<��U�-�ۿFy?T��h"8���u3����t�J����0�.��*�lrV3��=
�Õ==Z�*�L�Ӓ9���L���T9��t����-��G5�Jh��1����`�]W�0i	/�5��<����+�a���EHL>C/��穇�y �J�;��^����M�F���X���b�X��?&6є�uy҉�I�ͪ�Y�P�h#�W��1E��;�ˡ�R�B<���S��4'��<��&�Dl�nEdf����m��L�T&�ȵCyM��`�I��4�GG�Q����AV�ǰ�����qh)(壙�̄n����<��`���3�L[�Q��ޮ,&����K;�^�¿a�      '      x������ � �      #      x������ � �      %      x������ � �      !      x������ � �     