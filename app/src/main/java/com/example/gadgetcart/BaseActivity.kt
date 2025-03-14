package com.example.gadgetcart

import android.content.Intent
import android.os.Bundle
import android.view.WindowManager
import androidx.appcompat.app.AppCompatActivity
import com.example.gadgetcart.databinding.ActivityMainBinding

open class BaseActivity : AppCompatActivity() {

    protected lateinit var binding: ActivityMainBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        window.setFlags(
            WindowManager.LayoutParams.FLAG_LAYOUT_NO_LIMITS,
            WindowManager.LayoutParams.FLAG_LAYOUT_NO_LIMITS
        )
    }

    protected fun setupNavigation() {
        if (::binding.isInitialized) {
            binding.ibHomeicon.setOnClickListener {
                navigateTo(MainActivity::class.java)
            }

            binding.ibHomeicon.setImageResource(R.drawable.homeicon_page)

            binding.ibTracking.setOnClickListener {
                navigateTo(OrderTrackingActivity::class.java)
            }

            binding.ibProfile.setOnClickListener {
                navigateTo(ProfileActivity::class.java)
            }
        }
    }


    private fun navigateTo(targetActivity: Class<*>) {
        val intent = Intent(this, targetActivity)
        intent.flags = Intent.FLAG_ACTIVITY_CLEAR_TOP or Intent.FLAG_ACTIVITY_SINGLE_TOP
        startActivity(intent)
    }
}
