package com.example.gadgetcart

import android.content.Intent
import android.os.Bundle
import android.text.InputType
import androidx.appcompat.app.AppCompatActivity
import com.example.gadgetcart.databinding.SignInBinding
import com.google.android.material.textfield.TextInputEditText

class SignInActivity : AppCompatActivity() {
    private lateinit var binding: SignInBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = SignInBinding.inflate(layoutInflater)
        setContentView(binding.root)

        binding.btnLogIn.setOnClickListener{
            startActivity(Intent(this@SignInActivity, MainActivity::class.java))
        }

        binding.btnAbout.setOnClickListener{
            startActivity(Intent(this@SignInActivity, WelcomeActivity::class.java))
        }

        binding.btnBack.setOnClickListener{
            startActivity(Intent(this@SignInActivity, WelcomeActivity::class.java))
        }
        setupPasswordToggle()
    }

    private fun setupPasswordToggle() {
        binding.password.setEndIconOnClickListener() {
            togglePasswordVisibility(binding.etPassword)
        }
    }

    private fun togglePasswordVisibility(editText: TextInputEditText) {
        if (editText.inputType == InputType.TYPE_TEXT_VARIATION_VISIBLE_PASSWORD) {

            editText.inputType = InputType.TYPE_CLASS_TEXT or InputType.TYPE_TEXT_VARIATION_PASSWORD
        } else {

            editText.inputType = InputType.TYPE_TEXT_VARIATION_VISIBLE_PASSWORD
        }
        editText.setSelection(editText.text?.length ?: 0)
    }
}
