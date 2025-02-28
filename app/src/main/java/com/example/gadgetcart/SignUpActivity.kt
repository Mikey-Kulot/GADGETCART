package com.example.gadgetcart

import android.content.Intent
import android.os.Bundle
import android.text.InputType
import androidx.appcompat.app.AppCompatActivity
import com.example.gadgetcart.databinding.SignUpBinding
import com.google.android.material.textfield.TextInputEditText

class SignUpActivity : AppCompatActivity() {
    private lateinit var binding: SignUpBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = SignUpBinding.inflate(layoutInflater)
        setContentView(binding.root)

        binding.btnCreate.setOnClickListener {
            startActivity(Intent(this@SignUpActivity, MainActivity::class.java))
        }

        binding.tvLogin.setOnClickListener {
            startActivity(Intent(this@SignUpActivity, SignInActivity::class.java))
        }

        binding.btnBack.setOnClickListener {
            startActivity(Intent(this@SignUpActivity, WelcomeActivity::class.java))
        }

        setupPasswordToggle()
    }

    private fun setupPasswordToggle() {
        binding.password.setEndIconOnClickListener {
            togglePasswordVisibility(binding.etPassword)
        }
        binding.confirmPassword.setEndIconOnClickListener {
            togglePasswordVisibility(binding.etConfirmPass)
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
