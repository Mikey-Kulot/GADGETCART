package com.example.gadgetcart

import android.content.Intent
import android.os.Bundle
import android.text.InputType
import android.text.method.PasswordTransformationMethod
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.example.gadgetcart.databinding.SignInBinding

class SignInActivity : AppCompatActivity() {

    private lateinit var binding: SignInBinding
    private var isPasswordVisible = false

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = SignInBinding.inflate(layoutInflater)
        setContentView(binding.root)

        binding.ivTogglePassword.setOnClickListener {
            togglePasswordVisibility()
        }

        binding.tvSignUp.setOnClickListener {
            val intent = Intent(this@SignInActivity, SignUpActivity::class.java)
            startActivity(intent)
        }

        binding.btnSignIn.setOnClickListener {
            val username = binding.etUsername.text.toString().trim()
            val password = binding.etPassword.text.toString().trim()

            if (username.isEmpty() || password.isEmpty()) {
                Toast.makeText(this, "Please enter both username and password", Toast.LENGTH_SHORT).show()
            } else {
                Toast.makeText(this, "Please sign up first", Toast.LENGTH_SHORT).show()
            }
        }
    }

    private fun togglePasswordVisibility() {
        isPasswordVisible = !isPasswordVisible

        if (isPasswordVisible) {
            binding.etPassword.inputType = InputType.TYPE_TEXT_VARIATION_VISIBLE_PASSWORD
            binding.etPassword.transformationMethod = null
            binding.ivTogglePassword.setImageResource(R.drawable.ic_eye_open)
        } else {
            binding.etPassword.inputType = InputType.TYPE_CLASS_TEXT or InputType.TYPE_TEXT_VARIATION_PASSWORD
            binding.etPassword.transformationMethod = PasswordTransformationMethod.getInstance()
            binding.ivTogglePassword.setImageResource(R.drawable.ic_eye_closed)
        }

        binding.etPassword.setSelection(binding.etPassword.text.length)
    }
}
