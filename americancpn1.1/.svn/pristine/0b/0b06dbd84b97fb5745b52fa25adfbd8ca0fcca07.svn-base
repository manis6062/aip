SET foreign_key_checks = 0;

CREATE TABLE user (
  id              INT          NULL AUTO_INCREMENT,
  email           VARCHAR(50)  NOT NULL,
  password        VARCHAR(100) NOT NULL,
  status          BOOL,
  last_login_date TIMESTAMP         DEFAULT CURRENT_TIMESTAMP,
  created_date    TIMESTAMP         DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE (email)
)
  ENGINE = innodb
  CHARSET = latin1;


CREATE TABLE address (
  id          INT AUTO_INCREMENT,
  street      VARCHAR(20),
  state       VARCHAR(20),
  city        VARCHAR(20),
  postal_code VARCHAR(20),
  PRIMARY KEY (id)
)
  ENGINE = innodb
  CHARSET = latin1;


CREATE TABLE profile (
  user_id                INT,
  ssn                    VARCHAR(9),
  first_name             VARCHAR(20) NOT NULL,
  middle_initial         VARCHAR(1),
  last_name              VARCHAR(20) NOT NULL,
  gender                 VARCHAR(1),
  dob                    DATE,
  primary_phone_number   VARCHAR(20),
  secondary_phone_number VARCHAR(20),
  address_id             INT,
  cpn                    VARCHAR(11),
  comment                VARCHAR(11),
  PRIMARY KEY (user_id),
  FOREIGN KEY profile_user_userId (user_id) REFERENCES user (id),
  FOREIGN KEY profile_address_addressId (address_id) REFERENCES address (id)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE modules (
  id            INT,
  label         VARCHAR(10),
  description   VARCHAR(10),
  display_label VARCHAR(10),
  fees          DOUBLE,
  PRIMARY KEY (id),
  UNIQUE (id, label)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE module_registration (
  user_id   INT,
  module_id INT,
  fees      DOUBLE,
  PRIMARY KEY (user_id, module_id),
  FOREIGN KEY (module_id) REFERENCES modules (id),
  FOREIGN KEY (user_id) REFERENCES user (id)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE module_fees (
  module_id INT,
  fees      DOUBLE,
  UNIQUE (module_id, fees),
  FOREIGN KEY (module_id) REFERENCES modules (id)

)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE role (
  id     INT AUTO_INCREMENT,
  name   VARCHAR(20),
  label  VARCHAR(20),
  public BOOL,
  PRIMARY KEY (id),
  UNIQUE (name)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE auth (
  id    INT AUTO_INCREMENT,
  name  VARCHAR(30),
  label VARCHAR(30),
  PRIMARY KEY (id),
  UNIQUE (name)
)
  ENGINE = innodb
  CHARSET = latin1;


CREATE TABLE role_auth (
  role_id INT,
  auth_id INT,
  PRIMARY KEY (role_id, auth_id),
  FOREIGN KEY roleAuth_role_RoleId (role_id) REFERENCES role (id),
  FOREIGN KEY roleAuth_auth_authId (auth_id) REFERENCES auth (id)
)
  ENGINE = innodb
  CHARSET = latin1;


CREATE TABLE user_role (
  user_id INT,
  role_id INT,
  status  BOOL DEFAULT 0 NOT NULL ,
  PRIMARY KEY (user_id, role_id),
  FOREIGN KEY userRole_user_userId (user_id) REFERENCES user (id),
  FOREIGN KEY userRole_role_roleId (role_id) REFERENCES role (id)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE business (
  user_id  INT(11),
  site     VARCHAR(100),
  theme_id INT,
  name     VARCHAR(10),
  dba      VARCHAR(10),
  phone    VARCHAR(10),
  fax      VARCHAR(10),
  email    VARCHAR(30),
  status   BOOL,
  PRIMARY KEY (user_id),
  FOREIGN KEY business_user_userId (user_id) REFERENCES user (id)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE credit_card (
  id      INT AUTO_INCREMENT,
  user_id INT,
  number  VARCHAR(10),
  expiry  VARCHAR(10),
  cvc     VARCHAR(4),
  PRIMARY KEY (id),
  UNIQUE (user_id, number),
  FOREIGN KEY (user_id) REFERENCES user (id)
)
  ENGINE = innodb
  CHARSET = latin1;


CREATE TABLE credit_score (
  id           INT AUTO_INCREMENT,
  user_id      INT,
  equifax      INT,
  transunion   INT,
  experion     INT,
  updated_date TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE (user_id, equifax, transunion, experion),
  FOREIGN KEY (user_id) REFERENCES user (id)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE bank (
  id    INT AUTO_INCREMENT,
  name  VARCHAR(10),
  phone VARCHAR(10),
  site  VARCHAR(20),
  PRIMARY KEY (id),
  UNIQUE (name, phone)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE line_type (
  id   INT AUTO_INCREMENT,
  type VARCHAR(20),
  name VARCHAR(30),
  PRIMARY KEY (id),
  UNIQUE (type, name)
)
  ENGINE = innodb
  CHARSET = latin1;


CREATE TABLE invoice (
  id               INT,
  amount           DOUBLE,
  due_date         TIMESTAMP,
  previous_balance DOUBLE,
  PRIMARY KEY (id)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE payment_history (
  id              INT,
  invoice_id      INT,
  user_id         INT,
  payment_type    INT,
  payment_type_id INT,
  paid_amount     DOUBLE,
  balance         DOUBLE,
  paid_date       TIMESTAMP,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES user (id),
  FOREIGN KEY (invoice_id) REFERENCES invoice (id)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE paypal (
  id        INT AUTO_INCREMENT NOT NULL,
  user_id   INT,
  paypal_id VARCHAR(30),
  PRIMARY KEY (id),
  UNIQUE (user_id, paypal_id),
  FOREIGN KEY (user_id) REFERENCES user (id)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE broker (
  broker_id       INT NOT NULL,
  child_broker_id INT NOT NULL,
  status          BOOL,
  PRIMARY KEY (broker_id, child_broker_id),
  FOREIGN KEY broker_user_brokerId (broker_id) REFERENCES user (id),
  FOREIGN KEY broker_user_childBrokerId (child_broker_id) REFERENCES user (id)
)
  ENGINE = innodb
  CHARSET = latin1;


CREATE TABLE client (
  broker_id INT NOT NULL,
  client_id INT NOT NULL,
  status    BOOL,
  PRIMARY KEY (broker_id, client_id),
  FOREIGN KEY client_user_brokerId (broker_id) REFERENCES user (id),
  FOREIGN KEY client_user_clientId (client_id) REFERENCES user (id)
)
  ENGINE = innodb
  CHARSET = latin1;


CREATE TABLE owner (
  broker_id INT NOT NULL,
  owner_id  INT NOT NULL,
  status    BOOL,
  PRIMARY KEY (broker_id, owner_id),
  FOREIGN KEY owner_user_brokerId (broker_id) REFERENCES user (id),
  FOREIGN KEY owner_user_ownerId (owner_id) REFERENCES user (id)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE referrer (
  referrer_id INT NOT NULL,
  referree_id INT NOT NULL,
  status      BOOL,
  PRIMARY KEY (referrer_id, referree_id),
  FOREIGN KEY referrer_user_referrerId (referrer_id) REFERENCES user (id),
  FOREIGN KEY referrer_user_refereeId (referree_id) REFERENCES user (id)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE owner_line (
  owner_id INT,
  line_id  INT,
  status   BOOL,
  PRIMARY KEY (owner_id, line_id),
  FOREIGN KEY ownerLine_user_ownerId (owner_id) REFERENCES user (id),
  FOREIGN KEY ownerLine_line_lineId (line_id) REFERENCES line (id)
)
  ENGINE = innodb
  CHARSET = latin1;


CREATE TABLE line (
  id        INT(11) NOT NULL AUTO_INCREMENT,
  user_id   INT     NOT NULL,
  type_id    INT              DEFAULT NULL,
  bank      VARCHAR(200)     DEFAULT NULL,
  url       VARCHAR(50)      DEFAULT NULL,
  phone     VARCHAR(50)      DEFAULT NULL,
  lmt       INT(10)          DEFAULT NULL,
  balance   INT(10)          DEFAULT NULL,
  open      DATE             DEFAULT NULL,
  statement DATE             DEFAULT NULL,
  charge    DOUBLE           DEFAULT NULL,
  payment   VARCHAR(10),
  max       INT(3)           DEFAULT NULL,
  status    BOOL,
  note      VARCHAR(50)      DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY line_user_userId (user_id) REFERENCES user (id),
  FOREIGN KEY line_lineType_typeId (type_id) REFERENCES type_id (id)
)
  ENGINE = innodb
  AUTO_INCREMENT = 94
  DEFAULT CHARSET = latin1;


CREATE TABLE line_client (
  line_id         INT,
  client_id       INT,
  requested_date  TIMESTAMP,
  added_date      TIMESTAMP,
  verified_owner  TIMESTAMP,
  verified_broker TIMESTAMP,
  removed         TIMESTAMP,
  disqualified    TIMESTAMP,
  reason          VARCHAR(100),
  PRIMARY KEY (line_id, client_id),
  FOREIGN KEY lineClient_line_lineId (line_id) REFERENCES line (id),
  FOREIGN KEY lineClient_user_clientId (client_id) REFERENCES user (id)

)
  ENGINE = innodb
  CHARSET = latin1;


CREATE TABLE super_admin_sys_param (
  id INT(11)
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE broker_sys_parm (
  broker_id INT         NOT NULL,
  parm      VARCHAR(30) NOT NULL,
  value     VARCHAR(30) NOT NULL
)
  ENGINE = innodb
  CHARSET = latin1;

CREATE TABLE user_preferences (
  user_id INT,
  param   VARCHAR(20),
  value   VARCHAR(20)
)
  ENGINE = innodb
  CHARSET = latin1;


CREATE TABLE theme_option (
  id                BIGINT(11)   NOT NULL,
  title             VARCHAR(100) NOT NULL,
  caption           VARCHAR(150) NOT NULL,
  head_back_image   VARCHAR(150) NOT NULL,
  head_color        VARCHAR(20)  NOT NULL,
  custom_css        TEXT         NOT NULL,
  fav_icon          VARCHAR(150) NOT NULL,
  footer_color      VARCHAR(20)  NOT NULL,
  footer_back_image VARCHAR(150) NOT NULL,
  logo              VARCHAR(150) NOT NULL,
  created_by        INT(11)      NOT NULL,
  feature_heading1  VARCHAR(100) NOT NULL,
  feature_heading2  VARCHAR(100) NOT NULL,
  feature_heading3  VARCHAR(100) NOT NULL,
  feature_tagline1  VARCHAR(100) NOT NULL,
  feature_tagline2  VARCHAR(100) NOT NULL,
  feature_tagline3  VARCHAR(100) NOT NULL,
  feature_desc1     TEXT         NOT NULL,
  feature_desc2     TEXT         NOT NULL,
  feature_desc3     TEXT         NOT NULL,
  theme_video       TEXT         NOT NULL,
  PRIMARY KEY (id)
)
  ENGINE = innodb
  DEFAULT CHARSET = latin1;

CREATE TABLE states (
  id         INT(11)      NOT NULL AUTO_INCREMENT,
  state      VARCHAR(200) NOT NULL,
  state_code CHAR(2)      NOT NULL,
  PRIMARY KEY (id)
)
  ENGINE = innodb
  AUTO_INCREMENT = 52
  DEFAULT CHARSET = latin1;

CREATE TABLE menu (
  id          INT(11) NOT NULL                                                                              AUTO_INCREMENT,
  menu_name   VARCHAR(150)                                                                                  DEFAULT NULL,
  menu_type   ENUM('top-menu', 'main-menu', 'footer-menu', 'main-menu/footer-menu', 'top-menu/footer-menu') DEFAULT NULL,
  status      ENUM('active', 'inactive')                                                                    DEFAULT NULL,
  menu_order  INT(11)                                                                                       DEFAULT NULL,
  crtd_dt     VARCHAR(20)                                                                                   DEFAULT NULL,
  crtd_by     INT(11)                                                                                       DEFAULT NULL,
  updt_dt     VARCHAR(20)                                                                                   DEFAULT NULL,
  updt_by     INT(11)                                                                                       DEFAULT NULL,
  content_id  INT(11)                                                                                       DEFAULT NULL,
  menu_parent INT(11)                                                                                       DEFAULT NULL,
  menu_module INT(11)                                                                                       DEFAULT NULL,
  PRIMARY KEY (id)
)
  ENGINE = innodb
  AUTO_INCREMENT = 20
  DEFAULT CHARSET = latin1;


CREATE TABLE module (
  id                INT(11)      NOT NULL AUTO_INCREMENT,
  module_name       VARCHAR(100) NOT NULL,
  module_controller VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
)
  ENGINE = innodb
  AUTO_INCREMENT = 8
  DEFAULT CHARSET = latin1;

CREATE TABLE contact (
  id         INT(11)        NOT NULL AUTO_INCREMENT,
  google     ENUM('f', 't') NOT NULL,
  source     VARCHAR(800)   NOT NULL,
  form       ENUM('f', 't') NOT NULL,
  email      VARCHAR(30)    NOT NULL,
  address    VARCHAR(200)   NOT NULL,
  tel        VARCHAR(20)    NOT NULL,
  site       VARCHAR(100)   NOT NULL,
  created_by INT(11)        NOT NULL,
  PRIMARY KEY (id)
)
  ENGINE = innodb
  AUTO_INCREMENT = 2
  DEFAULT CHARSET = latin1;


CREATE TABLE forum_question (
  forum_id        BIGINT(11)   NOT NULL AUTO_INCREMENT,
  question        VARCHAR(200) NOT NULL,
  questioner      INT(11)      NOT NULL,
  forum_date      DATE         NOT NULL,
  views           INT(11)      NOT NULL,
  question_detail TEXT         NOT NULL,
  PRIMARY KEY (forum_id)
)
  ENGINE = innodb
  DEFAULT CHARSET = latin1;

CREATE TABLE forum_answer (
  forum_ans_id BIGINT(11) NOT NULL AUTO_INCREMENT,
  answer       TEXT       NOT NULL,
  answerer     INT(11)    NOT NULL,
  answer_date  DATE       NOT NULL,
  forum_id     INT(11)    NOT NULL,
  PRIMARY KEY (forum_ans_id)
)
  ENGINE = innodb
  DEFAULT CHARSET = latin1;


CREATE TABLE social (
  id           INT(11)      NOT NULL AUTO_INCREMENT,
  social_title VARCHAR(100) NOT NULL,
  social_link  VARCHAR(200) NOT NULL,
  social_icon  VARCHAR(200) NOT NULL,
  PRIMARY KEY (id)
)
  ENGINE = innodb
  AUTO_INCREMENT = 6
  DEFAULT CHARSET = latin1;

CREATE TABLE content (
  content_id          INT(5)            NOT NULL AUTO_INCREMENT,
  content_title       VARCHAR(225)      NOT NULL
  COMMENT 'title of content',
  content_description TEXT              NOT NULL
  COMMENT 'details of content',
  content_status      ENUM('yes', 'no') NOT NULL
  COMMENT 'flag to publish and unpublish',
  created_by          INT(11)           NOT NULL
  COMMENT 'record created date',
  created_date        DATETIME          NOT NULL
  COMMENT 'record created by',
  updated_by          INT(11)           NOT NULL
  COMMENT 'record updated by',
  updated_date        DATETIME          NOT NULL
  COMMENT 'record updated date',
  updated_count       INT(11)           NOT NULL
  COMMENT 'record updated count',
  PRIMARY KEY (content_id)
)
  ENGINE = myisam
  AUTO_INCREMENT = 35
  DEFAULT CHARSET = latin1;


CREATE TABLE process (
  process_id          INT(11)      NOT NULL AUTO_INCREMENT,
  process_title       VARCHAR(200) NOT NULL,
  process_caption     VARCHAR(200) NOT NULL,
  process_description TEXT         NOT NULL,
  PRIMARY KEY (process_id)
)
  ENGINE = innodb
  AUTO_INCREMENT = 6
  DEFAULT CHARSET = latin1;

CREATE TABLE homepage_slider (
  slider_id    INT(11)           NOT NULL AUTO_INCREMENT,
  slider_name  VARCHAR(255)               DEFAULT NULL,
  path         VARCHAR(255)      NOT NULL,
  mimage       VARCHAR(200)      NOT NULL,
  rimage       VARCHAR(200)      NOT NULL,
  description  LONGTEXT,
  slider_index INT(11)                    DEFAULT NULL,
  publish      ENUM('yes', 'no') NOT NULL,
  crtd_by      VARCHAR(50)       NOT NULL,
  crtd_dt      DATE              NOT NULL,
  updt_by      VARCHAR(50)       NOT NULL,
  updt_dt      DATE              NOT NULL,
  updt_cnt     INT(11)           NOT NULL,
  PRIMARY KEY (slider_id)
)
  ENGINE = myisam
  AUTO_INCREMENT = 41
  DEFAULT CHARSET = latin1;


CREATE TABLE faq (
  faq_id       INT(11)      NOT NULL AUTO_INCREMENT,
  faq_question VARCHAR(250) NOT NULL,
  faq_answer   TEXT         NOT NULL,
  PRIMARY KEY (faq_id)
)
  ENGINE = innodb
  DEFAULT CHARSET = latin1;


CREATE TABLE emails
(
  id          INT PRIMARY KEY      NOT NULL AUTO_INCREMENT,
  subject     LONGTEXT             NOT NULL,
  msg         LONGTEXT             NOT NULL,
  date        DATE                 NOT NULL,
  send_status CHAR(8)              NOT NULL,
  is_delete   CHAR(3) DEFAULT 'no' NOT NULL,
  user_id     INT                  NOT NULL
);

CREATE TABLE emails_receiver
(
  email_id    INT                      NOT NULL,
  receiver_id INT                      NOT NULL,
  display     CHAR(7) DEFAULT 'unseen' NOT NULL,
  receiver    VARCHAR(50)              NOT NULL
);

