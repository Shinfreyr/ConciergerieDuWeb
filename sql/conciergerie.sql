#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: accounts
#------------------------------------------------------------

CREATE TABLE accounts(
        idAccount        int (11) Auto_increment  NOT NULL ,
        passwordAccount  Varchar (275) NOT NULL ,
        dateAccount      Date NOT NULL ,
        avatarAccount    Varchar (275) NOT NULL ,
        statusAccount    Varchar (275) NOT NULL ,
        lastNameAccount  Varchar (275) NOT NULL ,
        firstNameAccount Varchar (275) NOT NULL ,
        mailAccount      Varchar (275) NOT NULL ,
        PRIMARY KEY (idAccount )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: sellers
#------------------------------------------------------------

CREATE TABLE sellers(
        idSeller          int (11) Auto_increment  NOT NULL ,
        societyNameSeller Varchar (275) NOT NULL ,
        sirenSeller       Int NOT NULL ,
        activitySeller    Varchar (275) NOT NULL ,
        descriptionSeller Varchar (1000) ,
        adressSeller      Varchar (275) NOT NULL ,
        postalCodeSeller  Int NOT NULL ,
        citySeller        Varchar (60) NOT NULL ,
        staticPhoneSeller Int NOT NULL ,
        mobilPhoneSeller  Int ,
        imageSeller       Varchar (275) NOT NULL ,
        idAccount         Int NOT NULL ,
        PRIMARY KEY (idSeller )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: enterprises
#------------------------------------------------------------

CREATE TABLE enterprises(
        idEntreprise                      int (11) Auto_increment  NOT NULL ,
        NameEnterprise                    Varchar (275) NOT NULL ,
        sirenEnterprise                   Int NOT NULL ,
        adressSiegeEnterprise             Varchar (275) NOT NULL ,
        postalCodeSiegeEnterprise         Int NOT NULL ,
        citySiegeEnterprise               Varchar (275) NOT NULL ,
        idContractEnterprise              Varchar (275) ,
        codeEnterprise                    Varchar (275) ,
        mailEnterprise                    Varchar (275) NOT NULL ,
        staticPhoneEnterprise             Varchar (275) NOT NULL ,
        mobilPhoneEnterprise              Varchar (275) ,
        adressFacturationEnterprise       Varchar (275) ,
        postalCodeFacturationEnterprise   Int ,
        cityFacturationEnterprise         Varchar (275) ,
        statutEnterprise                  Varchar (275) NOT NULL ,
        descriptionSubscriptionEnterprise Varchar (275) ,
        agentNumberEnterprise             Int ,
        PRIMARY KEY (idEntreprise )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: articles
#------------------------------------------------------------

CREATE TABLE articles(
        idArticle             int (11) Auto_increment  NOT NULL ,
        nomArticle            Varchar (275) NOT NULL ,
        descriptionArticle    Varchar (1000) ,
        originalPriceArticle  Int ,
        reductionArticle      Int ,
        reductionPriceArticle Int ,
        imageArticle          Varchar (275) ,
        beginingDateArticle   Date ,
        endDateArticle        Date ,
        idSeller              Int NOT NULL ,
        idCategory            Int NOT NULL ,
        PRIMARY KEY (idArticle )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: vouchers
#------------------------------------------------------------

CREATE TABLE vouchers(
        idVoucher   int (11) Auto_increment  NOT NULL ,
        codeVoucher Varchar (60) NOT NULL ,
        dateVoucher Date NOT NULL ,
        idArticle   Int NOT NULL ,
        idAccount   Int NOT NULL ,
        PRIMARY KEY (idVoucher )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE categories(
        idCategory   int (11) Auto_increment  NOT NULL ,
        nameCategory Varchar (25) NOT NULL ,
        PRIMARY KEY (idCategory )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Linked
#------------------------------------------------------------

CREATE TABLE Linked(
        idAccount    Int NOT NULL ,
        idEntreprise Int NOT NULL ,
        PRIMARY KEY (idAccount ,idEntreprise )
)ENGINE=InnoDB;

ALTER TABLE sellers ADD CONSTRAINT FK_sellers_idAccount FOREIGN KEY (idAccount) REFERENCES accounts(idAccount);
ALTER TABLE articles ADD CONSTRAINT FK_articles_idSeller FOREIGN KEY (idSeller) REFERENCES sellers(idSeller);
ALTER TABLE articles ADD CONSTRAINT FK_articles_idCategory FOREIGN KEY (idCategory) REFERENCES categories(idCategory);
ALTER TABLE vouchers ADD CONSTRAINT FK_vouchers_idArticle FOREIGN KEY (idArticle) REFERENCES articles(idArticle);
ALTER TABLE vouchers ADD CONSTRAINT FK_vouchers_idAccount FOREIGN KEY (idAccount) REFERENCES accounts(idAccount);
ALTER TABLE Linked ADD CONSTRAINT FK_Linked_idAccount FOREIGN KEY (idAccount) REFERENCES accounts(idAccount);
ALTER TABLE Linked ADD CONSTRAINT FK_Linked_idEntreprise FOREIGN KEY (idEntreprise) REFERENCES enterprises(idEntreprise);
