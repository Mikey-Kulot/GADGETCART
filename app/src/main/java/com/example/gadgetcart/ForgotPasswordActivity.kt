package com.example.gadgetcart

import android.content.Intent
import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import com.example.gadgetcart.databinding.ForgotPasswordBinding

class ForgotPasswordActivity : AppCompatActivity() {
    private lateinit var binding: ForgotPasswordBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ForgotPasswordBinding.inflate(layoutInflater)
        setContentView(binding.root)

        binding.btnBack.setOnClickListener{
            startActivity(Intent(this@ForgotPasswordActivity, WelcomeActivity::class.java))
        }

        binding.btnAbout.setOnClickListener{
            startActivity(Intent(this@ForgotPasswordActivity, SignUpActivity::class.java))
        }

        binding.btnReset.setOnClickListener{
            startActivity(Intent(this@ForgotPasswordActivity, SignInActivity::class.java))
        }
    }
}
