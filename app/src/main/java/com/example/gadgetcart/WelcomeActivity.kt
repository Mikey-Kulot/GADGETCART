package com.example.gadgetcart

import android.content.Intent
import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import com.example.gadgetcart.databinding.ActivityWelcomeBinding

class WelcomeActivity : AppCompatActivity() {
    private lateinit var binding: ActivityWelcomeBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityWelcomeBinding.inflate(layoutInflater)
        setContentView(binding.root)

        binding.startBtn.setOnClickListener {
            startActivity(Intent(this@WelcomeActivity, SignInActivity::class.java))
        }

        binding.tvSignUp.setOnClickListener {
            startActivity(Intent(this@WelcomeActivity, SignUpActivity::class.java))
        }
    }
}
