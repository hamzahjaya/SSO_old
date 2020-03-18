package com.muhardin.endy.belajar.sso.googlesso.entity;

import lombok.Data;

import javax.persistence.*;

@Entity @Table(name = "t_user") @Data
public class User {

    @Id
    private String id;
    private String username;
    @ManyToOne @JoinColumn(name = "id_role")
    private Role role;

}
