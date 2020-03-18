package controller;

import org.springframework.security.access.prepost.PreAuthorize;
import org.springframework.security.core.Authentication;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

@Controller
@RequestMapping("/")
public class HomeController {

    @GetMapping("user")
    public void user(){}

    @GetMapping("auth")
    @ResponseBody
    public Authentication auth(Authentication auth) {
        return auth;
    }

    @PreAuthorize("hasAuthority('t_master_aplikasi')")
    @GetMapping("t_master_aplikasi")
    public void daftarAplikasi(){}

    @PreAuthorize("hasAuthority('t_log')")
    @GetMapping("t_log")
    public void LogAktifitas(){}

    @PreAuthorize("hasAuthority('t_log_request_password')")
    @GetMapping("t_log_request_password")
    public void request(){}

}
