package com.example.gadgetcart

import android.content.Intent
import android.os.Bundle
import android.text.InputType
import android.view.MotionEvent
import android.widget.EditText
import androidx.appcompat.app.AppCompatActivity
import com.example.gadgetcart.databinding.SignUpBinding

class SignUpActivity : AppCompatActivity() {
    private lateinit var binding: SignUpBinding
    private var isPasswordVisible = false

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = SignUpBinding.inflate(layoutInflater)
        setContentView(binding.root)

        binding.btnSignUp.setOnClickListener {
            startActivity(Intent(this@SignUpActivity, MainActivity::class.java))
        }

        binding.tvSignIn.setOnClickListener {
            startActivity(Intent(this@SignUpActivity, SignInActivity::class.java))
        }

        binding.tvForgotPassword.setOnClickListener {
            startActivity(Intent(this@SignUpActivity, ForgotPasswordActivity::class.java))
        }

        setupPasswordToggle()
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
            editText.setCompoundDrawablesWithIntrinsicBounds(0, 0, R.drawable.visible, 0) // Eye closed icon
        } else {
            editText.inputType = InputType.TYPE_TEXT_VARIATION_VISIBLE_PASSWORD
            editText.setCompoundDrawablesWithIntrinsicBounds(0, 0, R.drawable.visibility, 0) // Eye open icon
        }
        editText.setSelection(editText.text?.length ?: 0)
        isPasswordVisible = !isPasswordVisible  // <-- FIX: Toggle the visibility state
    }
}
