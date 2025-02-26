package com.example.gadgetcart

import android.os.Bundle
import android.view.View
import androidx.recyclerview.widget.RecyclerView
import androidx.viewpager2.widget.CompositePageTransformer
import androidx.viewpager2.widget.MarginPageTransformer
import com.example.gadgetcart.Adapter.FlashsaleAdapter
import com.example.gadgetcart.databinding.ActivityMainBinding
import com.example.gadgetcart.model.FlashsaleModel

class MainActivity : BaseActivity() {
    private lateinit var binding: ActivityMainBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityMainBinding.inflate(layoutInflater)
        setContentView(binding.root)
    }

    private fun banners(image: List<FlashsaleModel>) {
        binding.vpNew.adapter = FlashsaleAdapter(image, binding.vpNew)
        binding.vpNew.clipToPadding = false
        binding.vpNew.clipChildren = false
        binding.vpNew.offscreenPageLimit = 3
        binding.vpNew.getChildAt(0).overScrollMode = RecyclerView.OVER_SCROLL_NEVER

        val compositePageTransformer = CompositePageTransformer().apply {
            addTransformer(MarginPageTransformer(400))
        }
        binding.vpNew.setPageTransformer(compositePageTransformer)

        if (image.size > 1) {
            binding.dots.visibility = View.VISIBLE
            binding.dots.attachTo(binding.vpNew)
        }
    }
}
