package com.example.gadgetcart

import android.content.Intent
import android.os.Bundle
import android.text.InputType
import android.view.MotionEvent
import android.widget.EditText
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

        binding.btnSignIn.setOnClickListener {
            val username = binding.etUsername.text.toString().trim()
            val password = binding.etPassword.text.toString().trim()

            if(validateInputs(username, password)){
                val intent = Intent(this, MainActivity::class.java)
                intent.putExtra("USERNAME", username)
                startActivity(intent)
            }
        }

        binding.tvSignUp.setOnClickListener{
            startActivity(Intent(this@SignInActivity, SignUpActivity::class.java))
        }

        binding.tvForgotPassword.setOnClickListener {
            startActivity(Intent(this@SignInActivity, ForgotPasswordActivity::class.java))
        }

        setupPasswordToggle()
    }

    private fun validateInputs(username: String, password: String): Boolean {
        if(username.isEmpty()){
            showToast("Username is required")
            return false
        }
        if (password.isEmpty() || password.length < 6){
            showToast("Password must contain 6 characters")
            return false
        }
            return true
    }

    private fun showToast(message: String) {
        Toast.makeText(applicationContext, message, Toast.LENGTH_SHORT).show()

    }

    private fun setupPasswordToggle() {
        binding.etPassword.setOnTouchListener { _, event ->
            if (event.action == MotionEvent.ACTION_UP) {
                val drawableEnd = binding.etPassword.compoundDrawablesRelative[2]
                if (drawableEnd != null && event.rawX >= (binding.etPassword.right - drawableEnd.bounds.width())) {
                    togglePasswordVisibility(binding.etPassword)
                    return@setOnTouchListener true
                }
            }
            false
        }
    }

    private fun togglePasswordVisibility(editText: EditText) {
        if (isPasswordVisible) {
            editText.inputType = InputType.TYPE_CLASS_TEXT or InputType.TYPE_TEXT_VARIATION_PASSWORD
            editText.setCompoundDrawablesWithIntrinsicBounds(0, 0, R.drawable.visible, 0)
        } else {
            editText.inputType = InputType.TYPE_TEXT_VARIATION_VISIBLE_PASSWORD
            editText.setCompoundDrawablesWithIntrinsicBounds(0, 0, R.drawable.visibility, 0)
        }
        editText.setSelection(editText.text?.length ?: 0)
        isPasswordVisible = !isPasswordVisible
    }
}
